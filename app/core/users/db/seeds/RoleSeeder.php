<?php

namespace App\Core\Users\DB\Seeds;
use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $roles = [
            [
                'name' => 'master_admin',
                'display_name' => 'Master Admin',
                'description'=> 'Have access on all modules,parts of software'
            ],
            [
                'name' => 'admin',
                'display_name' => 'Admin',
                'description'=> 'Has access on almost all part of application :: managed by Master Admin Roles'
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'description'=> 'User has access on mainly parts that should be accessible by this group'
            ],
            [
                'name' => 'guest',
                'display_name' => 'Guest',
                'description'=> 'Has very limited access on pages and apps.'
            ]
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }

}
