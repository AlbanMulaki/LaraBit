<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        $coreModules = config('core.modules');
        $corePath = config('core.core_path');
        foreach ($coreModules as $moduleName => $module) {
            if ($module === true) {
                include $corePath.$moduleName.'/db/seeds/Seed.php';
            }
        }
    }

}
