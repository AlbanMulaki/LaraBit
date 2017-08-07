<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServersHealthPivot extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servers_servers_health', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('server_id')->unsigned();
            $table->integer('health_id')->unsigned();
            $table->timestamps();
            $table->unique(['server_id','health_id'],'shr_id');
//            $table->foreign('server_id')->references('id')->on('servers');
//            $table->foreign('health_id')->references('id')->on('servers_health');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('servers_servers_health');
    }

}
