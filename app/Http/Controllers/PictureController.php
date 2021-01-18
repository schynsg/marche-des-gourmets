<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(10);

        return view('pictures', compact('images'));
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
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(picture $picture)
    {
        //
    }
}
