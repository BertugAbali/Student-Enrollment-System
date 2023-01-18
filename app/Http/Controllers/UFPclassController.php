<?php

namespace App\Http\Controllers;

use App\Models\UFPclass;
use Illuminate\Http\Request;

class UFPclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $class = new UFPclass();
        $class->name = $request->name;
        $class->save();
        return redirect()->back()->with('success', 'Class Succesfully Created');; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UFPclass  $uFPclass
     * @return \Illuminate\Http\Response
     */
    public function show(UFPclass $uFPclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UFPclass  $uFPclass
     * @return \Illuminate\Http\Response
     */
    public function edit(UFPclass $class)
    {
        return view('createClass',compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UFPclass  $uFPclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UFPclass $class)
    {
        $class->name = $request->name;
        $class->save();
      return redirect('/classes')->with('success', 'Class Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UFPclass  $uFPclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(UFPclass $class)
    {
        $class->delete();
        return redirect('/classes')->with('success', 'Class Succesfully Deleted');
    }
}
