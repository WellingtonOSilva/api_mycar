<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function returnSuccess($id, $message, $data) {
        return [
            'id'        => $id,
            'success'   => $message,
            'data'      => $data
        ];
    }
}
