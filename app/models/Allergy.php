<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    protected $fillable = ['name','severity','reaction'];
    public function patients(){
        return $this->belongsToMany('App\models\Patien','PatientAllergy');
    }
}
