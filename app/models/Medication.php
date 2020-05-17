<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = ['name'];
    public function patients(){
        return $this->belongsToMany('App\models\Patien','patient_medication');
    }
}
