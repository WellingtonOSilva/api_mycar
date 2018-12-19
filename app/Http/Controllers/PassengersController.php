<?php

namespace App\Http\Controllers;

use \App\Model\Passenger as Passenger;

class PassengerController extends Controller
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
        return Passenger::all();
    }

    public function one($id) {
        return Passenger::where('id_passenger', $id)->get();
    }


    //
}
