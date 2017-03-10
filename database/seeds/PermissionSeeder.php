<?php

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
                'name' => 'view',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role'
            ],
                [
                'name' => 'create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
                [
                'name' => 'edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
                [
                'name' => 'delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ]
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }

}
