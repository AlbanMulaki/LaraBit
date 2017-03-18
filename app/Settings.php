<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Settings extends Authenticatable {

  
    /**
     * Table Name
     * @var type 
     */
    protected $table='settings';

}
