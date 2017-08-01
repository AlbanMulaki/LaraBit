<?php

namespace App\Core\System\DB\Seeds;

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $permission = [
            [
                'name' => 'system.monitor',
                'display_name' => 'System Monitor health',
                'description' => 'Monitor system health'
            ]
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }

}
