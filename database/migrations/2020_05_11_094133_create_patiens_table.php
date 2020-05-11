<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->date('BirthDate');
            $table->string('gender');
            $table->string('email');
            $table->integer('phoneNumber');
            $table->integer('NationalNumber');
            $table->string('country');
            $table->string('password');
            $table->string('state');
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
        Schema::dropIfExists('patiens');
    }
}
