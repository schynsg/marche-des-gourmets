<?php

namespace App\Http\Controllers;

use App\Mail\BookingSuccess;
use App\Models\Bookings;
use App\Models\Params;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Stripe\PaymentIntent;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Stripe\Exception\ApiErrorException
     */
    public function index(Request $request)
    {
        if($request->all()['number'] > 0 && $request->all()['number'] >= 0) {
            $number = $request->all()['number'];
            $number_kids = $request->all()['number_kids'];
            $first_name = $request->all()['first_name'];
            $last_name = $request->all()['last_name'];
            $price = floatval(Params::first()->price);
            return view('checkout.index', compact('number','number_kids', 'first_name', 'last_name', 'price'));
        } else {
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            header("Location: http://$host$uri");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $number = $request['number'];
        $number_kids = $request['number_kids'];

        $booking = new Bookings();

        $booking->first_name = $first_name;
        $booking->last_name = $last_name;
        $booking->email = $email;
        $booking->quantity = $number;
        $booking->kids_quantity = $number_kids;

        $booking->save();

        $content = new \stdClass();
        $content->first_name = $first_name;
        $content->last_name = $last_name;
        $content->number = $number;
        $content->number_kids = $number_kids;

        //Mail::to($email)->send(new BookingSuccess($content));

        return view('checkout.success', compact('email'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
