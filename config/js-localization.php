<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Define the languages you want exported messages for
      |--------------------------------------------------------------------------
     */

    'locales' => ['en', 'sq'],
    /*
      |--------------------------------------------------------------------------
      | Define the target to save the exported messages to
      |--------------------------------------------------------------------------
      |
      | Directory for storing the static files generated when using file storage.
      |
     */
    'storage_path' => public_path('vendor/js-localization/'),
    /*
      |--------------------------------------------------------------------------
      | Define the messages to export
      |--------------------------------------------------------------------------
      |
      | An array containing the keys of the messages you wish to make accessible
      | for the Javascript code.
      | Remember that the number of messages sent to the browser influences the
      | time the website needs to load. So you are encouraged to limit these
      | messages to the minimum you really need.
      |
      | Supports nesting:
      |   [ 'mynamespace' => ['test1', 'test2'] ]
      | for instance will be internally resolved to:
      |   ['mynamespace.test1', 'mynamespace.test2']
      |
     */
    'messages' => [
        'passwords' => [
            'password', 'user', 'token'
        ],
        'login' => [
            'username',
            'password',
            'login',
            'lost_your_password',
            'new_to_site',
            'create_account',
            'login_form',
            'email_add',
            'first_name',
            'last_name',
            'email',
            'male',
            'female',
            'confirm_password',
            'already_a_member',
            
        ],
        'company' => [
            'company_name',
            'all_right_reserved',
        ]
    ],
    /*
      |--------------------------------------------------------------------------
      | Set the keys of config properties you want to use in javascript.
      | Caution: Do not expose any configuration values that should be kept privately!
      |--------------------------------------------------------------------------
     */// Set the keys of config properties you want to use in javascript.
// Caution: Do not expose any configuration values that should be kept privately!
    'config' => [
        'app.debug'
    ],
    /*
      |--------------------------------------------------------------------------
      | Disables the config cache if set to true, so you don't have to
      | run `php artisan js-localization:refresh` each time you change configuration files.
      | Attention: Should not be used in production mode due to decreased performance.
      |--------------------------------------------------------------------------
     */
    'disable_config_cache' => false,
];
