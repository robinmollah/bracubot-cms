<?php

namespace App\Http\Controllers;

use App\pattern;
use Illuminate\Http\Request;
use View;
use Session;
use Redirect;

class PatternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patterns = Pattern::all();
        return View::make('patterns.index')
            ->with('patterns', $patterns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('patterns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pattern = new Pattern;
        $pattern->pattern = $request->get('pattern');
        $pattern->asking = $request->get('asking');
        $pattern->multi = $request->get('multi');
        $pattern->template = $request->get('template');
        $pattern->query = $request->get('query');
        $pattern->save();

        Session::flash('message', "Successfully updated pattern");
        return Redirect::to('patterns');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pattern = pattern::find($id);

        return View::make('patterns.show')
            ->with('pattern', $pattern);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pattern = pattern::find($id);

        return View::make('patterns.edit')
            ->with('pattern', $pattern);
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
        $pattern = pattern::find($id);
        $pattern->pattern = $request->get('pattern');
        $pattern->asking = $request->get('asking');
        $pattern->multi = $request->get('multi');
        $pattern->template = $request->get('template');
        $pattern->query = $request->get('query');
        $pattern->save();

        Session::flash('message', "Successfully updated pattern");
        return Redirect::to('patterns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
