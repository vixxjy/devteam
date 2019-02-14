<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thoughtterm;
use Session;

class ThoughttermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thoughtterms = Thoughtterm::all();
     return view('backend.Thoughtterms.add',['thoughtterms' => $thoughtterms]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Thoughtterms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required|max:255',

            'bible_quote' => 'required|max:255',

            'verse' => 'required|max:400'

        ]);

         $thoughtterm = new Thoughtterm;

         $thoughtterm->title = $request->title;

         $thoughtterm->bible_quote = $request->bible_quote;

         $thoughtterm->verse = $request->verse;

         $thoughtterm->save();

         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thoughtterm = Thoughtterm::find($id);

        return view('backend.Thoughtterms.edit')->with('thoughtterm', $thoughtterm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
            $this->validate(request(),[

            'title' => 'required',

            'bible_quote' => 'required',

            'verse' => 'required'

         
            ]);

        $thoughtterm = Thoughtterm::find($id);

         $thoughtterm->title = $request->title;

         $thoughtterm->bible_quote = $request->bible_quote;

         $thoughtterm->verse = $request->verse;

         $thoughtterm->save();

         Session::flash('success', 'Thought of the term was edited successfully!');

         return redirect()->route('Thoughtterm');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $thoughtterm = Thoughtterm::find($id);

        $thoughtterm->delete();

         Session::flash('success', 'Thought of the term was deleted successfully!');

        return redirect()->back();
    }
}
