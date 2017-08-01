<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServersHealth extends Model {

    /**
     * Table Name
     * @var type 
     */
    protected $table = 'servers_health';

    /**
     * Update Settings in database
     * @param type $updateSettings
     */
    public static function getAllHealthTask() {
        return self::all();
        
    }

    public function server() {
        return $this->belongsToMany('App\Servers');
    }

}
