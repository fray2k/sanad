<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Slider;
use App\Course;
use App\Category;
use App\Http\Resources\CourseResource;
use App\Rules\ReCaptcha;

class FrontController extends Controller
{
    public function contactForm()
    {
        return view('front.contact-form');
    }
    public function capthcaFormValidate(Request $request)
    {
        // $request->validate([
           
        //     'captcha' => 'required|captcha'
        // ]);
        $this->validate(request(),[
            'captcha' => 'required|captcha'
        ],
        [
            'captcha.required'=>'captcha مطلوبه',
            'captcha.captcha'=>'captcha خطأ ',
        ]
    );


    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
  
        $input = $request->all();
  
        dd($input);
  
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
    public function index()
    {
        $isLogedin = Auth::guard('instructors')->user();
        $sliders=Slider::all();
        $courses=Course::where('status',1)->get();
        $categories = Category::selection()->with('courses')->has('courses')->get();
        // return $categories;
        
        return view('front.home',compact('isLogedin','sliders','courses','categories'));
    }
    public function coursesDetails($slug ,$id)
    { 
        $course = Course::with('course_instructor')
        ->with('categories')
        ->with('course_requirements')
        ->with('course_subtitle')
        ->with('user_courses_joined')
        ->with('user_joined')
        ->selection()
        ->where('id',$id)
        ->first();

        // $course = new CourseResource($details);
        // return $course;
        // dd($course);
        return view('front.course-details',compact('course'));
    }
    public function about()
    {
        return view('front.about');
    }
    public function policy()
    {
        return view('front.policy');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
