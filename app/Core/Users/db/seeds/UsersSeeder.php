<?php

namespace App\Core\Users\DB\Seeds;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $users = [
            [
                'username' => 'madmin',
                'first_name' => 'Master',
                'last_name' => 'Admin',
                'title' => 'Administrator',
                'language_code' => 'en',
                'gender' => '1',
                'phone'=>'+37745523514',
                'email' => 'madmin@larabit.com',
                'password' => Hash::make('admin'),
                'confirmation'=>true,
                'invite_id'=>NULL,
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
        
    }

}
