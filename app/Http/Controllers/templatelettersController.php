<?php

namespace App\Http\Controllers;

use App\Models\templateletter;
use Illuminate\Http\Request;

class templatelettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = templateletter::all();
        return view('templateletter', ['templates'=>$templates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\templateletter  $templateletter
     * @return \Illuminate\Http\Response
     */
    public function show(templateletter $templateletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\templateletter  $templateletter
     * @return \Illuminate\Http\Response
     */
    public function edit(templateletter $templateletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\templateletter  $templateletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, templateletter $templateletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\templateletter  $templateletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(templateletter $templateletter)
    {
        //
    }
}
