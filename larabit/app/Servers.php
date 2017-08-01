<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model {

    /**
     * Table Name
     * @var type 
     */
    protected $table = 'servers';

    /**
     * Update Settings in database
     * @param type $updateSettings
     */
    public static function getAllServer() {
        return self::all();
        
    }

}
