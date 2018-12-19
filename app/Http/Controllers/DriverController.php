<?php

namespace App\Http\Controllers;

use \App\Model\Driver as Driver;

class DriverController extends Controller
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
        return Driver::all();
    }

    public function one($id) {
        return Driver::where('id_driver', $id)->get();
    }


    //
}
