<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use App\Models\Filter;
use Illuminate\Http\Request;

class ExhibitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibitors = Exhibitor::where('active', '=', 1)->paginate(10);
        $filters = Filter::all();

        return view('exhibitors', compact('exhibitors', 'filters'));
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
        $request->validate([
            'name' => 'required|string|unique:exhibitors|max:255',
            'phone' => 'required|numeric|min:7',
            'street' => 'required|max:255',
            'postal' => 'required',
            'city' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $input = $request->all();


        $application = new Exhibitor();

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
        $application->active = 0;

        $application->save();

        return view('applicationSent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function show(exhibitor $exhibitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function edit(exhibitor $exhibitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exhibitor $exhibitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(exhibitor $exhibitor)
    {
        //
    }
}
