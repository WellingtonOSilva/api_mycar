<?php

namespace App\Http\Controllers;

use \App\Model\Races as Races;

class RacesController extends Controller
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
        return Races::all();
    }

    public function one($id) {
        return Races::with('driver', 'passenger.payment')->where('id_race', $id)->get();
    }


    //
}
