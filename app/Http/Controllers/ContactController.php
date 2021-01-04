<?php

namespace App\Http\Controllers;

use App\Models\text;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $texts = text::all();

        return view('contact', compact('texts'));
    }
}
