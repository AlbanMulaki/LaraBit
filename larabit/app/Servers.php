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
     * Get Healths of server
     * @return type
     */
    public function healths() {
        return ServersHealthPivot::where('server_id', $this->id)->get();
    }

}
