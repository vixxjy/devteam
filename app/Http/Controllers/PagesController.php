<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Event;

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
    public function moreEvent(){
        return view('more-event');
    }
    
    public function news(){
        $events = Event::orderBy('id', 'DESC')->get();
        return view('news')->with('events', $events);
    }
}
