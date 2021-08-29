<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Params;
use App\Models\Text;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {

        $extras = Extra::all();

        return view('about', compact('extras'));
    }
}
