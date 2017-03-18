<?php

namespace App\Core\Users\DB\Seeds;

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
            'name' => 'users.list-create',
            'display_name' => 'Create Acesss',
            'description' => 'Be able to insert,create data'
        ],
        [
            'name' => 'users.list-view',
            'display_name' => 'View Acesss',
            'description' => 'Be able to View,Display,show'
        ],
        [
            'name' => 'users.list-update',
            'display_name' => 'Update Acesss',
            'description' => 'Update, Edit'
        ],
        [
            'name' => 'users.list-delete',
            'display_name' => 'Delete Acesss',
            'description' => 'Delete,Remove data Acesss'
        ],
        [
            'name' => 'users.roles-view',
            'display_name' => 'Users Role View',
            'description' => ''
        ],
        [
            'name' => 'dashboard.stats',
            'display_name' => 'Users Role',
            'description' => ''
        ]
    ];
    foreach ($permission as $key => $value) {
      Permission::create($value);
    }
  }

}
