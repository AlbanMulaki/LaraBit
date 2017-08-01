<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServersTasks extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servers_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->string('protocol');
            $table->integer('port');
            $table->string('request_path')->default("/");
            $table->integer('check_interval')->default("300"); // Seconds
            $table->integer('timeout')->default("5"); // Seconds
            $table->integer('server_id')->unsigned();
            $table->timestamps();
            $table->foreign('server_id')->references('id')->on('servers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('servers_tasks');
    }

}
