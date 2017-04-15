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
                'value' => 'Larabit',
                'lang' => 'app_name',
                'type' => 'string',
                'tab_name' => 'general',
                'validation_rules' => 'min:3',
            ],
            [
                'code' => 'logo',
                'value' => 'logo',
                'lang' => 'logo',
                'type' => 'string',
                'tab_name' => 'general',
                'validation_rules' => ''
            ],
            [
                'code' => 'contact_email',
                'value' => 'info@larabit.com',
                'lang' => 'contact_email',
                'type' => 'string',
                'tab_name' => 'general',
                'validation_rules' => 'email'
            ]
        ];
        foreach ($permission as $key => $value) {
            Settings::create($value);
        }
    }

}
