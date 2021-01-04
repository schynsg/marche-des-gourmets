<?php

namespace App\Http\Controllers;

use App\Models\extra;
use App\Models\text;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {

        $texts = text::all();
        $extras = extra::all();

        return view('about', compact('texts', 'extras'));
    }
}
