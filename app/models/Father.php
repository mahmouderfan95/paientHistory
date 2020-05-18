<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    protected $fillable = ['father_diseases'];
    public function patients(){
        return $this->belongsToMany('App\models\Patien');
    }
}
