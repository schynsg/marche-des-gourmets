<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Text;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {

        $texts = Text::all();
        $extras = Extra::all();

        return view('about', compact('texts', 'extras'));
    }
}
