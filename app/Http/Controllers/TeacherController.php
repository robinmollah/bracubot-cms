<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use View;
use Session;
use Redirect;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return View::make('teachers.index')
            ->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher;
        $teacher->name = $request->get('name');
        $teacher->mail_id = $request->get('mail_id');
        $teacher->initial = $request->get('initial');
        $teacher->room_number = $request->get('room_number');
        $teacher->save();

        Session::flash('message', "Successfully updated teacher");
        return Redirect::to('teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return View::make('teachers.show')
            ->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return View::make('teachers.edit')
            ->with('teacher', $teacher);
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
        $teacher = Teacher::find($id);
        $teacher->name = $request->get('name');
        $teacher->mail_id = $request->get('mail_id');
        $teacher->initial = $request->get('initial');
        $teacher->room_number = $request->get('room_number');
        $teacher->save();

        Session::flash('message', "Successfully updated teacher");
        return Redirect::to('teachers');
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
