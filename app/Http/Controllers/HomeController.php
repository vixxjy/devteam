<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Slider;
use App\Thoughtweek;
use App\Thoughtterm;
use App\Youtube;

class HomeController extends Controller
{
    public function index()
    {

        $events = Event::orderBy('id', 'DESC')->get();
        $sliders = Slider::all();
        $thoughtweeks = Thoughtweek::orderBy('id', 'DESC')->get();
        $thoughtterms = Thoughtterm::orderBy('id', 'DESC')->get();
        $youtubes = Youtube::orderBy('id', 'DESC')->get();
        
        // dd($thoughtterms);
        return view('welcome')->with('events', $events)->with('sliders', $sliders)->with('thoughtweeks',$thoughtweeks)
        ->with('thoughtterms',$thoughtterms)->with('youtubes', $youtubes);


    } 
}
