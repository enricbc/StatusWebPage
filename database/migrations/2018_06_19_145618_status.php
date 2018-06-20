<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Status extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('status', function (Blueprint $table) {
          $table->increments('id');
          $table->string('ctickets');
          $table->string('mtickets');
          $table->string('etickets');
          $table->string('canticipos');
          $table->string('manticipos');
          $table->string('eanticipos');
          $table->string('cviajes');
          $table->string('mviajes');
          $table->string('eviajes');
          $table->string('cinformes');
          $table->string('minformes');
          $table->string('einformes');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
