<?php

namespace App\Http\Controllers;

use App\Models\exhibitor;
use App\Models\filter;
use App\Models\text;
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
        $exhibitors = exhibitor::paginate(10);
        $texts = text::all();
        $filters = filter::all();

        return view('exhibitors', compact('exhibitors', 'texts', 'filters'));
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
