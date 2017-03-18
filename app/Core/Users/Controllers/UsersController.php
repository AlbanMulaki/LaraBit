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
    public function redirect() {
        return redirect()->action("\\" . (self::class) . "@index");
    }

    /**
     * List all users
     * @return type
     */
    public function listsUser() {
        return view('users::listUser');
    }
    
    /*
     * Manage Roles page
     * @return view
     */
    public function roles(){
      return view('users::roles');
    }
}
