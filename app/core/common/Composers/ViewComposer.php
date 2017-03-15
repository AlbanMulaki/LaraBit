<?php

namespace App\Core\Common\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Lang;

class ViewComposer {

    public $views = "*";

    public function compose(View $view) {
        $menus = \App\Core\Common\Classes\BuildMenu::getInstance()->getMenus();
        $view->with('menus', $menus);
    }

}
