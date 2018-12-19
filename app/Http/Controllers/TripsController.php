<?php

namespace App\Http\Controllers;

use \App\Model\Trips as Trips;

class TripsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function all() {
        return Trips::all();
    }

    public function one($id) {
        return Trips::with('driver', 'passenger.payment')->where('id_race', $id)->get();
    }


    //
}
