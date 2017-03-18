<?php

namespace App\Core\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    /**
     * Dashboard page
     * @return redirect
     */
    public function dashboard() {
      return view("dashboard::dashboard");
    }

}
