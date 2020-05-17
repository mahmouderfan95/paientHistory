<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Agree extends Model
{
    protected $fillable = ['name'];
    public function patients(){
        return $this->belognsToMany('App\models\Agree','patient_agree');
    }

}
