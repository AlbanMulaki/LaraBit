<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServersHealthTask extends Model {

    /**
     * Table Name
     * @var type 
     */
    protected $table = 'servers_tasks';

    /**
     * Update Settings in database
     * @param type $updateSettings
     */
    public static function getAllHealthTask() {
        return self::all();
        
    }

}
