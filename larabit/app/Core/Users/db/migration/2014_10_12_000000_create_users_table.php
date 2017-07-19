<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->nullable();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('title', 200)->nullable();
            $table->string('company', 200)->nullable();
            $table->string('language_code', 3);
            $table->string('email', 100)->unique();
            $table->tinyInteger('gender');
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->string('phone', 90)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('state', 10)->nullable();
            $table->string('zipcode', 20)->nullable();
            $table->string('website', 250)->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('twitter_token')->nullable();
            $table->string('facebook_token')->nullable();
            $table->string('gmail_token')->nullable();
            $table->string('confirmation');
            $table->string('confirmation_code')->nullable();
            $table->string('resetpassword_code')->nullable();
            $table->string('invite_code')->nullable();
            $table->integer('invite_id')->unsigned()->nullable();
            
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('invite_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
