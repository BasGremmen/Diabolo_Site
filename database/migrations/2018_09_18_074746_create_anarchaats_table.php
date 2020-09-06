<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnarchaatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anarchaats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('ultimo_id');
			$table->integer('secretus_id');
			$table->integer('charon_id');
			$table->string('timespan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anarchaats');
    }
}
