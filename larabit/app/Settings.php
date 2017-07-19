<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

    /**
     * Table Name
     * @var type 
     */
    protected $table = 'settings';

    /**
     * Update Settings in database
     * @param type $updateSettings
     */
    public static function updateSettings($updateSettings) {
        foreach ($updateSettings as $code => $value) {
            self::where('code', $code)->update(array('value' => $value));
        }
        
    }

}
