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
            ],
            [
                'name' => 'images.image-get',
                'display_name' => 'Image Resource view',
                'description' => 'Image Resource view (Logo,avatar...)'
            ],
            [
                'name' => 'users.roles-change-permission',
                'display_name' => 'Roles change permission roles',
                'description' => 'Roles change permission roles'
            ],
            [
                'name' => 'users.roles-createRole',
                'display_name' => 'Create roles',
                'description' => 'Create roles group'
            ],
            [
                'name' => 'users.permission-create',
                'display_name' => 'Create New Permission',
                'description' => 'Create new permission for any route.'
            ],
            [
                'name' => 'users.permission-view',
                'display_name' => 'View permission Permission',
                'description' => 'View permissions.'
            ],
            [
                'name' => 'dashboard.settings',
                'display_name' => 'Settings Management View',
                'description' => 'Settings Management View .'
            ],
            [
                'name' => 'dashboard.settings-update',
                'display_name' => 'Settings Management Update',
                'description' => 'Settings Management Update.'
            ],
            [
                'name' => 'images.image-upload',
                'display_name' => 'Image Upload',
                'description' => 'Image upload'
            ],
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }

}