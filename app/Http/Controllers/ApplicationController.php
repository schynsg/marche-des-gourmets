<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\filter;
use App\Models\text;
use Illuminate\Http\Request;

class ApplicationController extends Controller
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

    /**middleware
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $texts = text::all();
        $filters = filter::all();

        return view('newExhibitor', compact('texts', 'filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filters = filter::all();
        $app = application::all();

        $input = $request->all();

        $application = new application();

        $application->name = $input['name'];
        $application->phone = $input['phone'];
        $application->website = $input['website'];
        $application->address = $input['street'];
        $application->postal_code = $input['postal'];
        $application->city = $input['city'];
        $application->country = $input['country'];
        $application->description = $input['description'];
        $application->is_bio = 1;

        $application->save();

        return $app;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(application $application)
    {
        //
    }
}
