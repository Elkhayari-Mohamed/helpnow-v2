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
        Schema::create('cosultation_doctor_ordonnance_patient', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cosultation_id')
            ->references('id')
            ->on('consultations')
            ->onDelete('cascade')->unsigned();

            $table->foreignId('ordonnance_id')
            ->references('id')
            ->on('ordonnances')
            ->onDelete('cascade')->unsigned();

            $table->foreignId('patient_id')
            ->references('id')
            ->on('patients')
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
        Schema::dropIfExists('cosultation_doctor_ordonnance_patient');
    }
};
