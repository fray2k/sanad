<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Slider;

class FrontController extends Controller
{
   
    public function index()
    {
        $isLogedin = Auth::guard('instructors')->user();
        $sliders=Slider::all();
        return view('front.home',compact('isLogedin','sliders'));
    }
}
