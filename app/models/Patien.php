<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patien extends Authenticatable implements MustVerifyEmail
{
    protected $fillable = ['image','firstName','middleName','lastName','BirthDate','gender','email','phoneNumber','NationalNumber','country','password','state','width','height','address','city','postalCode','aboutMe','role'];
}
