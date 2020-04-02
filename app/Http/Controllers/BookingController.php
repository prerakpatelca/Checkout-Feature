<?php
// StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
// No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.`

namespace App\Http\Controllers;

use App\Booking;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::get();
        $bookings = Booking::orderBy('id', 'asc')->get();
        return view('bookings.index',['bookings' => $bookings,'rooms' => $rooms,'current' => 'bookings']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $bookings = Room::get();
        // return view('rooms.create',['rooms' => (new Booking())]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Booking::create($request->input());
        return redirect()->action('BookingController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->action('BookingController@index');
    }
}
