<?php

namespace App\Core\Users\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Lang;


class ViewComposer
{
    public $views = ['users::login'];

    public function compose(View $view)
    {
        $view->with('title', "Lang.get('login.login_form')");
    }
}