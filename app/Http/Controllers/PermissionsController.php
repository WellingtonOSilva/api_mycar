<?php

namespace App\Http\Controllers;

use \App\Model\Permissions as Permissions;

class PermissionsController extends Controller
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
        return Permissions::all();
    }

    public function one($id) {
        return Permissions::where('id_permission', $id)->get();
    }


    //
}
