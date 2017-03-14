<?php

namespace App\Core\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UsersController extends Controller {

    /**
     * Define what to show first
     * Redirect to their path as first show
     * @return type
     */
    public function routes() {
        return redirect()->action("\\".(self::class)."@index");
    }

    public function index() {
        View::share('title','Hello World');
        return view('users::addUser');
    }
    public function lists() {
        return view('users::list');
    }

}
