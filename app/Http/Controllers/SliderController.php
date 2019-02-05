<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        return view('backend.sliders.add');
    }
    
    public function store(Request $request)
    {
        //validate form
        $messages = [
            'image.max' => 'The :attribute size must be under 2MB.',
            'image.dimensions' => 'The :attribute dimensions must be minimum 1900 X 1200.',
        ];
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:5|max:255',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=1900,min_height=1200',

        ], $messages);

        $storagepath = $request->file('image')->store('public/sliders');
        $fileName = basename($storagepath);

        $data = $request->all();
        $data['image'] = $fileName;

        Slider::create($data);

        return redirect()->back()->with('success', 'New slider item created.');
    }
}
