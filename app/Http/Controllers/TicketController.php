<?php

namespace App\Http\Controllers;

use App\Models\text;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $texts = text::all();

        return view('ticketing', compact('texts'));
    }
}
