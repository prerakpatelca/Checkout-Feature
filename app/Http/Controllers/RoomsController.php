<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        response('Hi, I am in Controller',200);
    }

    public function ShowRooms()
    {
        $results = DB::select("SELECT * FROM rooms;");
        echo json_encode($results);
    }
}
