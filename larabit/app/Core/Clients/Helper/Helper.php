<?php
namespace App\Core\Clients\Helper;

class Helper {

    public static function getPageName($pageName) {
        $names = explode("-", $pageName);
        $pageTitle = "";
        foreach ($names as $nameWord) {
            $pageTitle .= ucfirst($nameWord)." ";
        }
        return $pageTitle;
    }

}
