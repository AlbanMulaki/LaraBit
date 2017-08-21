<?php

namespace App\Core\Clients\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Core\System\Validator\HealthServerValidator;
use App\ServersMonitor;
use App\ServersHealthPivot;
use App\ServersHealth;
use App\Core\Clients\Helper\Helper;

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
        $this->setPageDescription("Fast, Cheap, and Scalable. Write application in any language PHP,Perl,Python,Java.Leverage fraework laravel,wordpress,lumen,joomla.");
        $this->setPageName("Website & Web Apps Solutions | " . $this->settings['app_name']);
        return view('clients::website.solutions.webapps');
    }

    /**
     * Add check health to server
     * @param HealthServerValidator $request
     * @return json
     */
    public function solutionsMobileApplication() {
        $this->setPageDescription("Cloud helps you strike balance performance easily for your mobile backend.");
        $this->setPageName(trans("clients::website.mobile_application") . " | " . $this->settings['app_name']);
        return view('clients::website.solutions.mobile-application');
    }

    /**
     * Sitemap
     */
    public function sitemap() {
        $this->setPageDescription("Sitemap MulakiHost structure of website");
        $this->setPageName("Sitemap MulakiHost structure of website | " . $this->settings['app_name']);
        return view('clients::website.sitemap');
    }

    /**
     * vpsServer
     */
    public function vpsServer() {
        $this->setPageDescription("Cheap Quality VPS SSD and Cloud Services using Container or Full KVM Virtualization SSD Server.");
        $this->setPageName("High Quality Linux and Windows VPS SSD and Cloud Servers | " . $this->settings['app_name']);
        return view('clients::website.products.vps.vps-server');
    }

    /**
     * vpsServerKvms
     */
    public function vpsServerLinuxKVM() {
        $this->setPageDescription("Cheap Quality VPS SSD and Cloud Services using Container or Full KVM Virtualization SSD Server.");
        $this->setPageName("High Quality Linux VPS SSD and Cloud Servers | " . $this->settings['app_name']);
        return view('clients::website.products.vps.linux-kvm');
    }

    /**
     * vpsServerWindowsKVM
     */
    public function vpsServerWindowsKVM() {
        $this->setPageDescription("Cheap Quality VPS SSD Windows VPS Hosting Server.");
        $this->setPageName("High Quality Windows VPS SSD and Cloud Servers | " . $this->settings['app_name']);
        return view('clients::website.products.vps.windows-kvm');
    }

    /**
     * Web Hosting
     */
    public function webHosting() {
        $this->setPageDescription("Fine tuned Web Hosting, SSD Hosting, Popular Languages and frameworks Laravel, Django, Flask, Wordpress, MyBB Node JS. Free SSL");
        $this->setPageName("Web Hosting | cPanel Control Panel | Fast Web Hosting | " . $this->settings['app_name']);
        return view('clients::website.products.web-hosting');
    }

}
