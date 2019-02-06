<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs()
    {
        return view('about');
    }
    
    public function academics(){
        return view('academics');
    }
    
    public function admission(){
        return view('admission');
    }
    
    public function contact(){
        return view('contact');
    }
    
    public function gallery(){
        return view('gallery');
    }
    
    public function news(){
        return view('news');
    }
}
