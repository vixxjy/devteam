<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Pdf;

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
    
    public function history() {
        return view('history');
    }
    
    public function downloads(){
        $pdfs = Pdf::orderBy('id', 'DESC')->get();
        return view('downloads', ['pdfs' => $pdfs]);
    }
    
    public function news($id){
        // dd($id);
        $events = Event::find($id);
        return view('news')->with('events', $events);
    }
}
