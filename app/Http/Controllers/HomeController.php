<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->get();
        return view('welcome')->with('events', $events);
    } 
}
