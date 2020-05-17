<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientAllergy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_allergy', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('Allergy_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patiens')->onDelete('cascade');
            $table->foreign('Allergy_id')->references('id')->on('allergies')->onDelete('cascade');
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
