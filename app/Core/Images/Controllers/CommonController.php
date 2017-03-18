<?php

namespace App\Core\Images\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Users\Controllers\UsersController;

class ImagesController extends Controller {

    /**
     * Define the default page to show first
     * @return redirect
     */
    public function redirect() {
        return redirect()->route("dashboard.stats");
    }

}
