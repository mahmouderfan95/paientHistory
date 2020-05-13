<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosptailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosptails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('hosptailName');
            $table->string('Primary_Speciality');
            $table->integer('Medical_License_Number');
            $table->string('Hosptail_License');
            $table->integer('phoneNumber');
            $table->integer('telephone');
            $table->integer('Hotline');
            $table->string('country');
            $table->string('city');
            $table->string('area');
            $table->string('street');
            $table->integer('zip_code');
            $table->string('email');
            $table->string('password');
            $table->string('role');
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
        Schema::dropIfExists('hosptails');
    }
}
