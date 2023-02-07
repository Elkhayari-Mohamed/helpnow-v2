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
        Schema::create('doctor_specialitie', function (Blueprint $table) {
            $table->id();

            $table->foreignId('specialitie_id')
            ->references('id')
            ->on('specialities')
            ->onDelete('cascade')->unsigned();

            $table->foreignId('doctor_id')
            ->references('id')
            ->on('doctors')
            ->onDelete('cascade')->unsigned();

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
        Schema::dropIfExists('doctor_specialitie');
    }
};
