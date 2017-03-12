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
                'name' => 'create',
                'display_name' => 'Create Acesss',
                'description' => 'Be able to insert,create data'
            ],
                [
                'name' => 'view',
                'display_name' => 'View Acesss',
                'description' => 'Be able to View,Display,show'
            ],
                [
                'name' => 'update',
                'display_name' => 'Update Acesss',
                'description' => 'Update, Edit'
            ],
                [
                'name' => 'delete',
                'display_name' => 'Delete Acesss',
                'description' => 'Delete,Remove data Acesss'
            ]
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }

}
