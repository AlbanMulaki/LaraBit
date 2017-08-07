<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServersForeigns extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('servers_servers_health', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('health_id')->references('id')->on('servers_health');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('servers_servers_health', function (Blueprint $table) {
            $table->dropForeign('servers_servers_health_server_id_foreign');
            $table->dropForeign('servers_servers_health_health_id_foreign');
        });
    }

}
