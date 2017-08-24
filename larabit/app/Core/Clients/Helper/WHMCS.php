<?php

namespace App\Core\Clients\Helper;

class WHMCS {

    public static $identifier = "IXF0qlIjzbpH2tOxkv1jVkU9P1cAvqwC";
    public static $secret = "F2RE4kcxPP056K6ql5JzvpBHeOsHf52l";
    public static $responsetype = "json";
    public static $endpoint = "https://billing.mulakihost.com/includes/api.php";
    public static $context;

    public function __construct() {
        $opts = array(
            'http' => array(
                'method' => "POST",
                'ignore_errors' => true,
                'header' => 'Content-Type: application/x-www-form-urlencoded'
            )
        );
        self::$context = $opts;
    }

    public static function fetch($action, $context = array()) {
        self::$context = array(
            'http' => array(
                'method' => "POST",
                'ignore_errors' => true,
                'header' => 'Content-Type: application/x-www-form-urlencoded'
            )
        );

        $postData = array_merge($context, array(
            'identifier' => self::$identifier,
            'secret' => self::$secret,
            'responsetype' => self::$responsetype,
            'action' => $action
        ));
        self::$context['http']['content'] = http_build_query($postData);
        try {
            $response = file_get_contents(self::$endpoint, false, stream_context_create(self::$context));
        } catch (\Exception $e) {
            return $response;
            return $e->getMessage();
        }
        return collect(json_decode($response, true));
    }

    static function is_valid_domain_name($domain_name) {
        return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain_name) //valid chars check
                && preg_match("/^.{1,253}$/", $domain_name) //overall length check
                && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain_name) ); //length of each label
    }

}
