<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patien extends Authenticatable implements MustVerifyEmail
{
    protected $fillable = [
        'image',
        'firstName',
        'middleName',
        'lastName',
        'BirthDate',
        'gender',
        'email',
        'phoneNumber',
        'password',
        'state',
        'width',
        'height',
        'blood',
        'country',
        'role'];
        /* function agrees */
        public function agrees(){
            return $this->belongsToMany('App\models\Agree','patient_agree');
        }
        /* end of function */
        /* function allergys */
        public function Allergys(){
            return $this->belongsToMany('App\models\Allergy','patient_allergy');
        }
        /* end of function */
        /* function surgeys */
        public function Surgerys(){
            return $this->belongsToMany('App\models\Surgery','patient_surgery');
        }
        /* end of function */
        public function medications(){
            return $this->belongsToMany('App\models\Medication','patient_medication');
        }
}
