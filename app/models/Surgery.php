<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    protected $fillable = ['name','date'];
    public function patients(){
        return $this->belognsToMany('App\models\Patien','patient_surgery');
    }
}
