<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServersMonitor extends Model {

    /**
     * Table Name
     * @var type 
     */
    protected $table = 'servers_monitor';
    protected $fillable = ['status','latency','server_id','tasks_id'];

    public static function insertResultStatus($parameters) {
        return self::all();
        
    }

}
