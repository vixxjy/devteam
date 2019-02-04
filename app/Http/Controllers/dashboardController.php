<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        // $logo = Setting::get()->first();
        //dd($logo);
        return view('backend.dashboard');
    } 
}
