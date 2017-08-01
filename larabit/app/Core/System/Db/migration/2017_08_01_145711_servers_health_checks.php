<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServersHealthChecks extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servers_health_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->string('latency'); 
            $table->integer('shr_id')->unsigned();
            $table->timestamps();
            $table->foreign("shr_id")->references("id")->on('servers_servers_health');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('servers_health_checks');
    }

}
