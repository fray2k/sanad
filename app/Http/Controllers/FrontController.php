<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Slider;
use App\Course;
use App\Category;
use App\Http\Resources\CourseResource;


class FrontController extends Controller
{
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
}
