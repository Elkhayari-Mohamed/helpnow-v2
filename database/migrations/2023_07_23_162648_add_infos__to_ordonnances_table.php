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
        Schema::table('ordonnances', function (Blueprint $table) {
            $table->string('medication_name')->after('prescription')->nullable();
            $table->string('dosage')->after('medication_name')->nullable();
            $table->string('frequency')->after('dosage')->nullable();
            $table->string('duration')->after('frequency')->nullable();
            $table->string('instructions')->after('duration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordonnances', function (Blueprint $table) {
            $table->dropColumn('medication_name');
            $table->dropColumn('dosage');
            $table->dropColumn('frequency');
            $table->dropColumn('duration');
            $table->dropColumn('instructions');
        });
    }
};
