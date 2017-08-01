<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServersMonitor extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servers_monitor', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->string('latency'); 
            $table->integer('server_id')->unsigned();
            $table->integer('tasks_id')->unsigned();
            $table->timestamps();
            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('tasks_id')->references('id')->on('servers_tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('servers_monitor');
    }

}
