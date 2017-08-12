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
                'type' => 'image',
                'tab_name' => 'general',
                'validation_rules' => ''
            ],
            [
                'code' => 'contact_email',
                'value' => 'info@larabit.com',
                'lang' => 'contact_email',
                'type' => 'string',
                'tab_name' => 'contacts',
                'validation_rules' => 'email'
            ],
            [
                'code' => 'sales_email',
                'value' => 'info@larabit.com',
                'lang' => 'sales_email',
                'type' => 'string',
                'tab_name' => 'contacts',
                'validation_rules' => 'email'
            ],
            [
                'code' => 'support_email',
                'value' => 'info@larabit.com',
                'lang' => 'support_email',
                'type' => 'string',
                'tab_name' => 'contacts',
                'validation_rules' => 'email'
            ],
            [
                'code' => 'footer_description',
                'value' => '...',
                'lang' => 'footer_description',
                'type' => 'string',
                'tab_name' => 'general',
                'validation_rules' => 'string'
            ]
        ];
        foreach ($permission as $key => $value) {
            Settings::create($value);
        }
    }

}
