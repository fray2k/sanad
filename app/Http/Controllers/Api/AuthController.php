<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;

use DB;
use Hash;
use Mail;
use Crypt;
use Session;

use App\Instructor;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    use GeneralTrait;
    public function login(Request $request)
    {
        try {
            $rules = [
                "email" => "required",
                "password" => "required",
                // "device_token" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }
            $checkUser = Instructor::where("email" , $request->email)->first();
            if($checkUser){
                // if($checkUser->is_activated ==0)
                // {
                //   return $this -> returnError('Das Konto ist nicht aktiviert');
                // }else {
                  $credentials = $request->only(['email','password']);
                  $token =  Auth::guard('instructors-api') -> attempt($credentials);
                  if(!$token)
                      return $this -> returnError('falsche Email oder Passwort');

                  $UserData = Instructor::where("email" , $request->email)->first();
                  $UserData->token=$token;
                  $UserData->save();
                  return $this -> returnDataa('data',$UserData,'تم تسجيل الدخول بنجاح');
                // }
            }else {
              return $this -> returnError('البريد الإلكتروني أو كلمة المرور خطأ');
            }
        }catch (\Exception $ex){
            return $this->returnError( $ex->getMessage());
        }
    }

   public function register(Request $request)
   {
        $checkemail = Instructor::where("email" , $request->email)->first();
        if($checkemail){
            return $this -> returnError('البريد الالكتروني موجود بالفعل');
        }else{
            $token = Str::random(60);
            $add = Instructor::create([
                'first_name'  => $request->first_name,
                'last_name'  => $request->last_name,
                'mobile'  => $request->mobile,
                'email'      => $request->email,
                'password'   => Hash::make($request->password),
                'type'=>'student'
            ]);
            $user = Instructor::where("id" , $add->id)->first();
            $add_array = $add->toArray();
            $add_array['link'] = Str::random(32);
            DB::table('user_activations')->insert(['id_user'=>$add_array['id'],'token'=>$add_array['link']]);
            Mail::send('emails.activation', $add_array, function($message) use ($add_array){
                $message->to($add_array['email']);
                $message->subject('Sanad - Activation code');
            });

            return $this -> returnDataa('data',$user,'لقد تلقيت تأكيدا عبر البريد الإلكتروني. انقر على رابط التأكيد');
            // return $this -> returnSuccessMessage('successfully registered');
        }
    }
    public function userActivation($token){
        // dd('vdvgdvgd');
        $check = DB::table('user_activations')->where('token',$token)->first();
        if(!is_null($check)){
            $user = User::find($check->id_user);
            if ($user->is_activated ==1){
               // return $this -> returnSuccessMessage('Your account is activated');
                return redirect()->to('/activation/message')->with('message'," Ihr Konto ist aktiviert");
            }
            $user->update(['is_activated' => 1]);
            DB::table('user_activations')->where('token',$token)->delete();
             // return $this -> returnSuccessMessage('Your account has been activated');
            return redirect()->to('/activation/message')->with('message',"Dein Konto wurde aktiviert");
        }
        // return $this -> returnError('The activation code is invalid');
        return redirect()->to('/activation/message')->with('Warning',"Der Aktivierungscode ist ungültig");
    }

    public function forgetPassword(Request $request)
    {

           $input = $request->all();
           $rules = array(
               'email' => 'required|email|exists:users',
           );
           $validator = Validator::make($input, $rules);

           if ($validator->fails()) {
               return $this->returnError($validator->errors()->first());

           } else {
               try {

                   $user= User::where('email',$request->email)->first();
                   if($user==null){

                       return $this -> returnError('Email wurde nicht gefunden');
                   }else{

                       $token = Str::random(64);
                       DB::table('password_resets')->insert([
                             'email' => $request->email,
                             'token' => $token,
                             'created_at' => Carbon::now()
                       ]);
                       // dd($token);
                       Mail::send('emails.forgetpassword', ['token' => $token], function($message) use($request){
                             $message->to($request->email);
                             $message->subject('Reset Password');
                       });
                       $details = [
                           'title' => 'Mail from hamada ali',
                           'body' => 'This is for testing email using smtp',
                           'token' => $token,
                       ];

                       // \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));


                       return $this -> returnSuccessMessage('Please visit your email');
                   }
               } catch (\Swift_TransportException $ex) {
                   $arr = array("status" => 400, "message" => $ex->getMessage(), "data" => []);
               } catch (Exception $ex) {
                   $arr = array("status" => 400, "message" => $ex->getMessage(), "data" => []);
               }
           }
           // return \Response::json('doneeeee');
       }


   public function changePassword(Request $request)
   {

       $user = Auth::guard('user-api')->user();
        if(!$user)
           return $this->returnError('You must login first');
       // dd('cha');
       $input = $request->all();
       $userid = User::where("id" , $user->id)->first();

       $rules = array(
           'old_password' => 'required',
           'new_password' => 'required',
           'confirm_password' => 'required|same:new_password',
       );
       $validator = Validator::make($input, $rules);
       if ($validator->fails()) {
           return $this->returnError($validator->errors()->first());
       } else {
           try {
               if ((Hash::check(request('old_password'), $userid->password)) == false) {
                       return $this->returnError('Check your old password.');
               }else if ((Hash::check(request('new_password'), $request->password)) == true) {
                      return $this->returnError('lease enter a password which is not similar then current password.');
               }else {
                    $userid->password  = bcrypt($input['new_password']);
                    $userid->save();
                    return $this -> returnDataa('data',$userid,'Password updated successfully.');
               }
           } catch (\Exception $ex) {
               if (isset($ex->errorInfo[2])) {
                   $msg = $ex->errorInfo[2];
               } else {
                   $msg = $ex->getMessage();
               }
               return $this->returnError($msg);
               // $arr = array("status" => 400, "message" => $msg, "data" => array());
           }
       }
       // return \Response::json($arr);
   }
     public function getUserData(Request $request)
    {
        // $token = $request->bearerToken();
        // return $token;
        $user = Auth::guard('user-api')->user();
         if(!$user)
            return $this->returnError('يجب تسجيل الدخول أولا');

            $user->photo= "https://deutschtests.com/img/profiles/".$user->photo;


        return $this -> returnDataa(
            'data',$user,'riuhfer'
        );
    }
    public function profileUpdate(Request $request)
    {
        // return $request->all();
        $user = Auth::guard('user-api')->user();
        if(!$user)
            return $this->returnError('You must login first ');

        $edit = User::findOrFail($user->id);
        if($file=$request->file('photo'))
        {
            $file_extension = $request -> file('photo')->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $file_nameone = $file_name;
            $path = 'img/profiles';
            $request-> file('photo') ->move($path,$file_name);
            $edit->photo  = $file_nameone;
        }else{
            $edit->photo  = $edit->photo;
        }

        if(isset($request->name)){
            $edit->name  = $request->name;
        }else{
            $edit->name  = $edit->name;
        }
        if(isset($request->mobile)){
            $edit->mobile  = $request->mobile;
        }else{
            $edit->mobile  = $edit->mobile;
        }
        if(isset($request->country)){
            $edit->country  = $request->country;
        }else{
            $edit->country  = $edit->country;
        }
        if(isset($request->language)){
            $edit->language  = $request->language;
        }else{
            $edit->language  = $edit->language;
        }


        $edit-> save();
        // return $request->all();
        $user = User::find($edit->id);
        $user->photo= "https://deutschtests.com/img/profiles/".$user->photo;
        return $this -> returnDataa('data',$user,'updated successfully');

    }
    public function contactInfo()
    {
         $contactinfo = ContactInfo::first();

         $contactinfo->logo="https://deutschtests.com/img/settings/".$contactinfo->logo;
         $contactinfo->favicon="https://deutschtests.com/img/settings/".$contactinfo->favicon;
         $contactinfo->image="https://deutschtests.com/img/settings/".$contactinfo->image;

         $contactinfo->a1="https://deutschtests.com/img/settings/".$contactinfo->a1;
         $contactinfo->a2="https://deutschtests.com/img/settings/".$contactinfo->a2;
         $contactinfo->b1="https://deutschtests.com/img/settings/".$contactinfo->b1;
         $contactinfo->b2="https://deutschtests.com/img/settings/".$contactinfo->b2;
         $contactinfo->c1="https://deutschtests.com/img/settings/".$contactinfo->c1;
         $contactinfo->m1="https://deutschtests.com/img/settings/".$contactinfo->m1;



         return $this -> returnDataa(
             'data',$contactinfo,'erifhr'
         );
     }
     public function checkUserAuth(Request $request)
     {
         $user = Auth::guard('user-api')->user();
         if(!$user)
            return $this->returnError('You must login first');
         // return $this -> returnDataa('data',$user,'');
     }

    
    
}
