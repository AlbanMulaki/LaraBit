<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Lang;
class RegisterComposer
{


    public function compose(View $view)
    {
        $view->with('title', "Lang.get('login.create_account')");
    }
}