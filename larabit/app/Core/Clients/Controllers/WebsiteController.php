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
        return view('clients::pages.mypackages',['title'=>"Hosting, Cloud VPS, Dedicated Server, Email Business | MulakiHost",
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
    public function attachHealthServer(HealthServerValidator $request) {
        try {
            $healthServer = ServersHealthPivot::create($request->all());
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                $message['message'][] = trans("system::validation.health_check_duplicate");
            } else {
                $message['message'][] = $e->errorInfo;
            }
            $message['code'] = 500;
            $message['status'] = 'error';
            $message['action'] = 'create';
            return response()->json($message, $message['code']);
        }
        $healthCheck = ServersHealth::find($request->get('health_id'));
        $message['message'][] = trans('system::validation.health_check_attached', ["healthcheck" => $healthCheck->name]);
        $message['code'] = 200;
        $message['status'] = 'success';
        $message['action'] = 'create';
        return response()->json($message, $message['code']);
    }

    /**
     * Remove check health from server
     * @param HealthServerValidator $request
     * @return json
     */
    public function dettachHealthServer(HealthServerValidator $request) {
        try {
            $serverHealth = ServersHealthPivot::where('server_id', $request->server_id)->where('health_id', $request->health_id)->first();
            \App\ServersHealthChecks::where('shr_id', $serverHealth->id)->delete();
            $serverHealth->delete();
        } catch (\ErrorException $e) {
            if ((request()->ajax() && !request()->pjax()) || request()->wantsJson()) {
                $message['message'][] = trans("system::validation.health_server_doesnt_exist");
                $message['code'] = 500;
                $message['status'] = 'error';
                $message['action'] = 'delete';
                return response()->json($message, $message['code']);
            }
            return abort(500);
        } catch (\Illuminate\Database\QueryException $e) {

            if ((request()->ajax() && !request()->pjax()) || request()->wantsJson()) {
                if ($e->errorInfo[1] == 1062) {
                    $message['message'][] = trans("common::validation.generic_error");
                } else {
                    $message['message'][] = $e->errorInfo;
                }
                $message['code'] = 500;
                $message['status'] = 'error';
                $message['action'] = 'delete';
                return response()->json($message, $message['code']);
            }
            return abort(500);
        }
        if ((request()->ajax() && !request()->pjax()) || request()->wantsJson()) {
            $message['message'][] = trans('system::validation.health_check_dettached', ["healthcheck" => ""]);
            $message['code'] = 200;
            $message['status'] = 'success';
            $message['action'] = 'delete';
            return response()->json($message, $message['code']);
        }
        return redirect()->back();
    }

}
