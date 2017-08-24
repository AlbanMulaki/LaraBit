<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;

class Controller extends BaseController {

  use AuthorizesRequests,
	  DispatchesJobs,
	  ValidatesRequests;

  private $pageName;
  private $appName;
  private $keywords;
  private $pageDescription;
  public $settings;

  public function __construct() {
	$this->setPageName();
	$this->setPageDescription();
	$this->setKeyword();
	$this->settings = Settings::pluck('value', 'code')->all();
	View::share('settings', $this->settings);
  }

  public function setPageName($text = null) {
	$this->pageName = ($text != null ? $text : trans('general.page_title'));
	\Illuminate\Support\Facades\View::share('title', $this->pageName);
  }

  public function setPageDescription($text = null) {
	$this->pageDescription = ($text != null ? $text : trans('general.page_description'));
	$this->setComposerValue('description', $this->pageDescription);
  }
  public function setKeyword($text = null) {
	$this->keywords = ($text != null ? $text : trans('general.page_description'));
	$this->setComposerValue('keywords', $this->keywords);
  }

  /**
   * Share variable with views
   * @param type $key
   * @param type $value
   */
  public function setComposerValue($key, $value) {
	\Illuminate\Support\Facades\View::share($key, $value);
  }

}
