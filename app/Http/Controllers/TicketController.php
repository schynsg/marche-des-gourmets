<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $texts = Text::all();
        $price = floatval(Text::query()->where('title','LIKE', 'price')->first()->content);


        return view('ticketing', compact('texts', 'price'));
    }
}
