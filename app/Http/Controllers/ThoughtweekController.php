<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thoughtweek;
use Session;

class ThoughtweekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thoughtweeks = Thoughtweek::all();
     return view('backend.Thoughtweeks.add',['thoughtweeks' => $thoughtweeks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Thoughtweeks.create');
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

            'verse' => 'required|max:255'

        ]);

         $thoughtweek = new Thoughtweek;

         $thoughtweek->title = $request->title;

         $thoughtweek->bible_quote = $request->bible_quote;

         $thoughtweek->verse = $request->verse;

         $thoughtweek->save();

         Session::flash('success', 'Thought of the week was stored successfully!');
         
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
        $thoughtweek = Thoughtweek::find($id);

        return view('backend.Thoughtweeks.edit')->with('thoughtweek', $thoughtweek);
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

        $thoughtweek = Thoughtweek::find($id);

         $thoughtweek->title = $request->title;

         $thoughtweek->bible_quote = $request->bible_quote;

         $thoughtweek->verse = $request->verse;

         $thoughtweek->save();


         Session::flash('success', 'Thought of the week was edited successfully!');

         return redirect()->route('Thoughtweek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thoughtweek = Thoughtweek::find($id);

        $thoughtweek->delete();

         Session::flash('success', 'Thought of the term was deleted successfully!');

        return redirect()->back();
    }
}
