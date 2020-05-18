<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class screening extends Model
{
     protected $fillable = ['colonscopy','mammogram','prc','colonscopy_date','mammogram_date','prc_date','patient_id'];
     /* function patient */
     public function patient(){
         return $this->belongsTo('App\models\Patien','patient_id');
     }
     /* end of patient function */

}
