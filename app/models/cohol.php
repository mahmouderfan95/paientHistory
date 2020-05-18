<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class cohol extends Model
{
    protected $fillable = ['type','severity'];
    public function patient(){
        return $this->belongsTo('App\models\Patien','patient_id');
    }
}
