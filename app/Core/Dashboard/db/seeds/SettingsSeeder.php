<?php

namespace App\Core\Dashboard\DB\Seeds;

use Illuminate\Database\Seeder;
use App\Permission;

class SettingsSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $permission = [
        ['code' => 'app_name',
            'value' => 'Larabit'
            
        ]
    ];
    foreach ($permission as $key => $value) {
      Permission::create($value);
    }
  }

}
