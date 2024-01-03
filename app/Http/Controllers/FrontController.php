<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class FrontController extends Controller
{
   
    public function index()
    {
        $isLogedin = Auth::guard('instructors')->user();
        // dd($isLogedin);
        return view('front.home',compact('isLogedin'));
    }
}
