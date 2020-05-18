<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Brother extends Model
{
    protected $fillable = ['brother_diseases'];
    public function patients(){
        return $this->belongsToMany('App\models\Patien');
    }
}
