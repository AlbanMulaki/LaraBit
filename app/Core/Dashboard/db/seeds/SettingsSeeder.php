<?php

namespace App\Core\Dashboard\DB\Seeds;

use Illuminate\Database\Seeder;
use App\Settings;

class SettingsSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $permission = [
        [
            'code' => 'app_name',
            'value' => 'Larabit'
        ],
        [
            'code'=> 'logo',
            'value'=>'logo',
        ]
    ];
    foreach ($permission as $key => $value) {
      Settings::create($value);
    }
  }

}
