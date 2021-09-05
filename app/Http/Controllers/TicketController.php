<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Params;
use Illuminate\Http\Request;
use PhpParser\Node\Param;

class TicketController extends Controller
{

    public function index()
    {
        $price = Params::first()->price;
        $ageForFree = Params::first()->age_for_free;

        $entriesNumber = Params::first()->entries_number;

        $bookings = Bookings::all();
        $entriesTotal = 0;
        foreach ($bookings as $booking){
            $entriesTotal += $booking->quantity;
        }

        $availableEntries = $entriesNumber - $entriesTotal;

        return view('ticketing', compact( 'price', 'ageForFree', 'availableEntries'));
    }
}
