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
            $table->string('password');
            $table->string('state');
            $table->integer('height')->default(150);
            $table->integer('width')->default(70);
            $table->string('blood')->default('A+');
            $table->string('country')->default('Egypt');
            // $table->integer('postalCode')->nullable();
            // $table->text('aboutMe')->default('about me bla bla bla');
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
        Schema::dropIfExists('patiens');
    }
}
