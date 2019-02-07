<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

use App\Slider;


class HomeController extends Controller
{
    public function index()
    {

        $events = Event::orderBy('id', 'DESC')->get();
        $sliders = Slider::all();

        return view('welcome')->with('events', $events)->with('sliders', $sliders);


    } 
}
