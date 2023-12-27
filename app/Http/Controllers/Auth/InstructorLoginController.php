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
    public function signOutInstructors() {
        $user = Auth::guard('instructors')->user(); 
        if(!$user)
            return redirect('instructor-login');
        Auth::guard('instructors')->logout();
        return redirect('instructor-login');
    }
}