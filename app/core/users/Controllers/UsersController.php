<?php

namespace App\Core\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UsersController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->setPageName(trans('users::general.users_title'));
    }

    /**
     * Define what to show first
     * Redirect to their path as first show
     * @return type
     */
    public function routes() {
        return redirect()->action("\\" . (self::class) . "@index");
    }

    /**
     * List all users
     * @return type
     */
    public function index() {
        return view('users::users');
    }

}
