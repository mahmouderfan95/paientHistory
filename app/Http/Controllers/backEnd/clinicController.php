<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Clinic;
use App\Http\Requests\backEnd\clinic\Store;
use Auth;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\clinicCreate;

class clinicController extends Controller
{
    public function register(){
        return view('backEnd.clinic.register');
    }
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/clinic/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload Clinic_License */
        if($request->Clinic_License){
            $img = Image::make($request->Clinic_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/clinic/' . $request->Clinic_License->hashName()));
            $request_data['Clinic_License'] = $request->Clinic_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'clinic';
        /* insert data */
        $clinic_create = Clinic::create($request_data);
        /* send mail */
        Mail::to($clinic_create->email)->send(new clinicCreate($clinic_create));
        /* login clinic */
        Auth::guard('clinic')->login($clinic_create);
        // return redirct //
        return redirect()->route('clinic.profile',$clinic_create['id']);
    }
    /* function profile */
    public function profile($id){
        $clinic = Clinic::find($id);
        return view('backEnd.clinic.profile',compact('clinic'));
    }
    /* end of function profile */
    public function logout(){
        Auth::guard('clinic')->logout();
        return redirect()->route('indexRoute');
    }
}
