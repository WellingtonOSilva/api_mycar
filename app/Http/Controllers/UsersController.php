<?php

namespace App\Http\Controllers;

use \App\Model\Users as Users;

class UsersController extends Controller
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
        return Users::all();
    }

    public function one($id) {
        return Users::where('id_user', $id)->get();
    }


    //
}
