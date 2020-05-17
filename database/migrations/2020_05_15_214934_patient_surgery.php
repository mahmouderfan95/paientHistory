<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientSurgery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_surgery', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('surgery_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patiens')->onDelete('cascade');
            $table->foreign('surgery_id')->references('id')->on('surgeries')->onDelete('cascade');
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
