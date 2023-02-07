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

        Schema::table('consultations', function (Blueprint $table) {

            $table->renameColumn('name','doctor_name');
            });

        Schema::table('consultations', function (Blueprint $table) {
           
            $table->string('patient_name')->after('doctor_name');
            $table->integer('price')->after('patient_name');
        
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
