<?php

namespace App\Core\Users\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller {

    //
    public function index() {
        return view('layouts.default');
    }

}
