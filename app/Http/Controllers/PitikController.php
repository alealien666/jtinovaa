<?php

namespace App\Http\Controllers;

use App\Models\Pitik;
use App\Http\Requests\StorePitikRequest;
use App\Http\Requests\UpdatePitikRequest;

class PitikController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePitikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePitikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pitik  $pitik
     * @return \Illuminate\Http\Response
     */
    public function show(Pitik $pitik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pitik  $pitik
     * @return \Illuminate\Http\Response
     */
    public function edit(Pitik $pitik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePitikRequest  $request
     * @param  \App\Models\Pitik  $pitik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePitikRequest $request, Pitik $pitik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pitik  $pitik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pitik $pitik)
    {
        //
    }
}
