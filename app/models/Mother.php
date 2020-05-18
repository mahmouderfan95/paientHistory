<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $fillable = ['mother_diseases'];
    public function patients(){
        return $this->belongsToMany('App\models\Patien');
    }
}
