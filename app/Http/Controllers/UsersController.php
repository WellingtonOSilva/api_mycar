<?php

namespace App\Http\Controllers;

use \App\Model\Users as Users;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $structure;

    public function __construct()
    {
        $this->structure = [
            'email'         => 'required|email',
            'name'          => 'required',
            'password'      => 'required',
            'permission'    => 'required'
        ];
    }

    public function all() {
        return Users::all();
    }

    public function one($id) {
        return Users::where('id_user', $id)->get();
    }

    public function create(Request $request) {

        if(!$validation = $this->validate($request, $this->structure)) {
            return $validation;
        } 

        $user = new Users();

        $user->email        = $request->input('email');
        $user->name         = $request->input('name');
        $user->password     = $request->input('password');
        $user->permission   = $request->input('permission');

        if(!$user->save()) {
            return ["error" => "Não foi possivel"];
        } 

        return $this->returnSuccess($user->id_user, "User created succesfully", $request->except(['password']));
    } 
    //
}
