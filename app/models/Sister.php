<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sister extends Model
{
    protected $fillable = ['sister_diseases'];
    public function patients(){
        return $this->belongsToMany('App\models\Patien');
    }
}
