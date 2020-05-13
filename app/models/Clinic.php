<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Clinic extends Authenticatable implements MustVerifyEmail
{
    protected $fillable = ['image','clinicName','Primary_Speciality','Medical_License_Number','Clinic_License','phoneNumber','telephone','Hotline','country','city','area','street','zip_code','email','password','role'];
}
