<?php

namespace App\Core\Users\DB\Seeds;
use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;
class RelationsRoleSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = User::where('username','madmin')->first();
        $role = Role::where('name','master_admin')->first();
        
        $user->attachRole($role);
        
        
        $permissions = Permission::all();
        foreach($permissions as $permission){
            $role->attachPermission($permission);
        }
//        foreach($permissions as $permission){
//            Permission
//            
//        }
    }

}
