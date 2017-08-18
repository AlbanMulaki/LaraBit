<?php

namespace App\Core\Clients\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Core\System\Validator\HealthServerValidator;
use App\ServersMonitor;
use App\ServersHealthPivot;
use App\ServersHealth;

class WebsiteController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->setPageName(trans('system::general.system_title'));
    }

    /**
     * Get packages
     * @return type
     */
    public function home() {
        return view('clients::website.index', ['title' => "Hosting, Cloud VPS, Dedicated Server, Email Business | MulakiHost",
            "description" => "Mulaki Host is a web hosting provider that specializes in dedicated server hosting, cloud server and its related products and services. Enterprise Solutions"]);
    }

    /**
     * Get invoices
     * @return type
     */
    public function invoices() {
        return view('clients::pages.invoices');
    }

    /**
     * Get server
     * @return type
     */
    public function server() {
        return view('clients::pages.packages.server');
    }

    /**
     * Get server
     * @return type
     */
    public function hosting() {
        return view('clients::pages.packages.hosting');
    }

    /**
     * Add check health to server
     * @param HealthServerValidator $request
     * @return json
     */
    public function solutionsWebApps() {
        return view('clients::website.solutions.webapps');
    }

    /**
     * Add check health to server
     * @param HealthServerValidator $request
     * @return json
     */
    public function solutionsMobileApplication() {
        $this->setPageName(trans("clients::website.mobile_application"));
        return view('clients::website.solutions.mobile-application');
    }

    /**
     * Sitemap
     */
    public function sitemap() {
        return view('clients::website.sitemap');
    }

}
