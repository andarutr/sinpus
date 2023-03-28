<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointku', function (Blueprint $table) {
            $table->increments('id_pointku');
            $table->integer('id_user');
            $table->integer('id_book');
            $table->integer('id_meringkas');
            $table->integer('pointku');
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
        Schema::dropIfExists('pointku');
    }
};
