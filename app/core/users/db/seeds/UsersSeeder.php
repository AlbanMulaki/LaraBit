<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $users = [
            [
                'name' => 'Alban Mulaki',
                'email' => 'Display Role Listing',
                'password' => Hash::make('admin')
            ]
        ];
        foreach ($users as $user) {
            App\User::create($user);
        }
    }

}
