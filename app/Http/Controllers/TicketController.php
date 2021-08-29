<?php

namespace App\Http\Controllers;

use App\Models\Params;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $price = Params::first()->price;
        $ageForFree = Params::first()->age_for_free;


        return view('ticketing', compact( 'price', 'ageForFree'));
    }
}
