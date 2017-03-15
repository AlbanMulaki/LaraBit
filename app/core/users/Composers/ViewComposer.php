<?php

namespace App\Core\Users\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Lang;

class ViewComposer {


  public $views = "*";


  /**
   * For all views of this modules
   */
//  public $views = "*";

  public function compose(View $view) {
<<<<<<< HEAD
	$view->with('title', "Lang.get('login.login_form')");

=======
//	$view->with('title', "Lang.get('login.login_form')");
>>>>>>> d77985b52c14cf66fc9eba1214ca14b0fe7253e5
  }

}
