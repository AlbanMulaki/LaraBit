<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServersHealthChecks extends Model {

    /**
     * Table Name
     * @var type 
     */
    protected $table = 'servers_health_checks';
    protected $fillable = ['status', 'latency', 'shr_id'];

}
