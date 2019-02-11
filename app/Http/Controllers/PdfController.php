<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index(){
        return view('backend.pdf.add');
    }
    
    public function upload(Request $request)
    {
        // dd($request->all());
        $uniqueFileName = uniqid() . $request->file('upload_file')->getClientOriginalName() . '.' 
        . $request->file('upload_file')->getClientOriginalExtension(); 

        $request->file('upload_file')->move(public_path('files') . $uniqueFileName);

        return redirect()->back()->with('success', 'Pdf File uploaded successfully.');
    }
}
