<?php

namespace App\Http\Controllers;

use App\Models\text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $texts = text::all();

        return view('index', compact('texts'));
    }
}
