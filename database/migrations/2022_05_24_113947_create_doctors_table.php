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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->references('id')             
            ->on('users')             
            ->onDelete('cascade')->unsigned();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('city');
            $table->string('country');
            $table->string('notes')->nullable();
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
        $table->dropForeign('user_id');
        Schema::dropIfExists('doctors');
    }
};
