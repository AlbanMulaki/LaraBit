<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Lang;
class ProfileComposer
{


    public function compose(View $view)
    {
        $view->with('title', "Lang.get('login.login_form')");
    }
}