<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Exhibitor;
use App\Models\Filter;
use App\Models\Text;
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
        $texts = Text::all();
        $filters = Filter::all();

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

        $request->validate([
            'name' => 'required|string|unique:applications|max:255',
            'phone' => 'required|numeric|max:15|min:7',
            'website' => 'required|url',
            'street' => 'required|max:255',
            'postal' => 'required|numeric|min:3|max:8',
            'city' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $input = $request->all();


        $application = new Application();

        $application->name = $input['name'];
        $application->phone = $input['phone'];
        $application->website = $input['website'];
        $application->address = $input['street'];
        $application->postal_code = $input['postal'];
        $application->city = $input['city'];
        $application->country = $input['country'];
        $application->description = $input['description'];
        if (isset($input['bio'])){
            $application->is_bio = 1;
        } else{
            $application->is_bio = 0;
        }

        $application->save();

        return view('welcome');


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
