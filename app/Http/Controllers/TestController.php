<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {

    //


    public function getIndex() {
        return view('panels.users.index');
    }

}
