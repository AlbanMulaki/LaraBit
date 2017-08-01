<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Core\Common\Helper\Enum;

class ServersHealthPivot extends Model {

    /**
     * Table Name
     * @var type 
     */
    protected $table = 'servers_servers_health';

    public static function insertResultStatus($parameters) {
        return self::all();
    }

    public function getHealth() {
        return $this->hasOne("App\ServersHealth", "id", "health_id");
    }

    public function getHealthCheck() {
        return $this->hasMany("App\ServersHealthChecks", "shr_id", "id");
    }

    /**
     * Get health status of server
     * @return type
     */
    public function getHealthCheckStatus() {
        $checkHealth = $this->getHealthCheck;
        $status = $checkHealth->groupBy('status')->map(function ($item) {
            return $item->count();
        });
        $statusValidated[Enum::FAILED] = (isset($status[Enum::FAILED]) ? $status[Enum::FAILED] : 0);
        $statusValidated[Enum::SUCCESS] = (isset($status[Enum::SUCCESS]) ? $status[Enum::SUCCESS] : 0);
        return collect(['latency' => number_format((float) $checkHealth->avg("latency"), 2),
            'status' => [
                'failed' => $statusValidated[Enum::FAILED],
                'successful' => $statusValidated[Enum::SUCCESS],
                'uptime' => number_format((float) $statusValidated[Enum::SUCCESS] / ($statusValidated[Enum::SUCCESS] + $statusValidated[Enum::FAILED]) * 100, 2)
            ]
        ]);
    }

}
