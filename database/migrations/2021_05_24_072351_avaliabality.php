<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Avaliabality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliabality', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('time_from')->nullable();
            $table->string('time_to')->nullable();
            $table->string('days')->nullable();
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
