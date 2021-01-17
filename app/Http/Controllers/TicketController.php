<?php

namespace App\Http\Controllers;

use App\Models\text;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $texts = text::all();
        $price = floatval(text::query()->where('title','LIKE', 'price')->first()->content);


        return view('ticketing', compact('texts', 'price'));
    }
}
