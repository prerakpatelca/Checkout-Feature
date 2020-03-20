<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('id', 'asc')->get();
        return view('rooms.index',['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::get();
        return view('rooms.create',['rooms' => $rooms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('rooms')->insert([
            'room_number' => $request->input('room_number'),
            'room_name' => $request->input('room_name'),
            'room_desc' => $request->input('room_desc'),
            'max_occupancy' => $request->input('max_occ')
        ]);
        return redirect()->action('RoomsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $rooms = DB::table('rooms')->where('id',$room->id)->first();
        return view('rooms.edit',['rooms' => $rooms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        DB::table('rooms')
            ->where('id',$room->id)            
            ->update([
            'room_number' => $request->input('room_number'),
            'room_name' => $request->input('room_name'),
            'room_desc' => $request->input('room_desc'),
            'max_occupancy' => $request->input('max_occ')
        ]);
        return redirect()->action('RoomsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        DB::table('rooms')->where('id',$room->id)->delete();
        return redirect()->action('RoomsController@index');
    }
}
