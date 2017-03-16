<?php

namespace App\Core\Users\Controllers\Auth;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;

class LoginController extends Controller {
  /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
   */

use AuthenticatesUsers;
  // sadasda
  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
      parent::__construct();
      $this->setPageName("Login");
	$this->middleware('guest', ['except' => 'logout']);
  }

  public function showLoginForm() {
	return view('users::login');
  }
  public function test()
  {
    
  }

}
