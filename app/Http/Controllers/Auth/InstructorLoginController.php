<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Instructor;

use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Mail;
use Crypt;
use Hash;
use Auth;
// use DB;
class InstructorLoginController extends Controller
{
    public function UserLogin()
    {   
        // dd('hhh');
        $user = Auth::guard('instructors')->user();
        if($user)
            return redirect('/');
        $new_session_id = \Session::getId();
        return view('instructor.login');
    }

    public function LoginUser(request $request)
    {
        $this->validate(request(),[
            'email'    => 'required',
            'password' => 'required',
            ],
            [
                'email.required'=>' البريد  الإلكتروني مطلوب',
                'password.required'=>' كلمة المرور مطلوبة',
            ]
        );

        $credentials = $request -> only(['email','password']);
        $checkinstructor = Instructor::where("email" , $request->email)->first();
        if($checkinstructor){
            if($checkinstructor->is_activated ==0)
            {
                return redirect('instructorlogin')->with("errorss", 'الحساب غير مفعل'); 
            }else{
                $good = Auth::guard('instructors') -> attempt($credentials);
                if($good) {
                    return redirect('instructor/straights');                  
                }else{
                    return redirect('instructorlogin')->with("errorss", 'بيانات الدخول غير صحيحةة'); 
                }
            }
        }else{
            return redirect('instructorlogin')->with("errorss", 'بيانات الدخول غير صحيحة'); 
        }
    }


    public function resetUserPasswordGet($token) {
         return view('auth.forgetpasswordlink', ['token' => $token]);
    }


    public function resetUserPasswordPost(Request $request)
    {
          // $request->validate([
          //     // 'email' => 'required|email|exists:users',
          //     'password' => 'required|string|min:3|confirmed',
          //     'password_confirmation' => 'required'
          // ]);
          $this->validate(request(),[
                  'password' => 'required|string|min:3|confirmed',
                  'password_confirmation' => 'required'
              ],
              [
                  'password.required'=>'Neues Kennwort',
                  'password.min'=>'Nicht weniger als drei Buchstaben und Zahlen',
                  'password_confirmation.required'=>' Bestätige das Passwort',
              ]
          );

          $updatePassword = DB::table('password_resets')->where([
                                // 'email' => $request->email,
                                'token' => $request->token
                              ])->first();

          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
          $user = User::where('email', $updatePassword->email)->first();
          // $user->email  = $request->email;
          $user->password  = bcrypt($request->password);
          $user-> save();

          DB::table('password_resets')->where(['email'=> $updatePassword->email])->delete();
          if(session()->get('locale')){
              $langg=session()->get('locale');
          }else{
              $langg=app()->getLocale();
          }

            return redirect('/')->with('message', 'Ihr Passwort wurde geändert! ');

    }
    public function resetPasswordGetApi($token) {
        return view('auth.forgetpasswordlink_api', ['token' => $token]);
   }


   public function resetPasswordPostApi(Request $request)
   {
         // $request->validate([
         //     // 'email' => 'required|email|exists:users',
         //     'password' => 'required|string|min:3|confirmed',
         //     'password_confirmation' => 'required'
         // ]);
         $this->validate(request(),[
                 'password' => 'required|string|min:3|confirmed',
                 'password_confirmation' => 'required'
             ],
             [
                 'password.required'=>'Neues Kennwort',
                 'password.min'=>'Nicht weniger als drei Buchstaben und Zahlen',
                 'password_confirmation.required'=>' Bestätige das Passwort',
             ]
         );

         $updatePassword = DB::table('password_resets')->where([
                               // 'email' => $request->email,
                               'token' => $request->token
                             ])->first();

         if(!$updatePassword){
             return back()->withInput()->with('error', 'Invalid token!');
         }
         $user = Instructor::where('email', $updatePassword->email)->first();
         // $user->email  = $request->email;
         $user->password  = bcrypt($request->password);
         $user-> save();

         DB::table('password_resets')->where(['email'=> $updatePassword->email])->delete();
         if(session()->get('locale')){
             $langg=session()->get('locale');
         }else{
             $langg=app()->getLocale();
         }

           return redirect('/')->with('message', 'Ihr Passwort wurde geändert! ');

   }

    public function signOutInstructors() {
        $user = Auth::guard('instructors')->user(); 
        if(!$user)
            return redirect('instructor-login');
        Auth::guard('instructors')->logout();
        return redirect('instructor-login');
    }
}