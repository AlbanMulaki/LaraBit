<?php

// $this->call(UsersTableSeeder::class);
$this->call(App\Core\Users\DB\Seeds\PermissionSeeder::class);
$this->call(App\Core\Users\DB\Seeds\UsersSeeder::class);
$this->call(App\Core\Users\DB\Seeds\RoleSeeder::class);
$this->call(App\Core\Users\DB\Seeds\RelationsRoleSeeder::class);
