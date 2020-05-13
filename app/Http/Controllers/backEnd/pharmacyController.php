<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Pharmacy;
use App\Http\Requests\backEnd\pharmacy\Store;
use Auth;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\pharmacyCreate;

class pharmacyController extends Controller
{
    public function register(){
        return view('backEnd.pharmacy.register');
    }
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/pharmacy/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload lab_License */
        if($request->pharmacy_License){
            $img = Image::make($request->pharmacy_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/pharmacy/' . $request->pharmacy_License->hashName()));
            $request_data['pharmacy_License'] = $request->pharmacy_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'pharmacy';
        /* insert data */
        $pharmacy_create = Pharmacy::create($request_data);
        /* send mail */
        Mail::to($pharmacy_create->email)->send(new pharmacyCreate($pharmacy_create));
        /* login */
        Auth::guard('pharmacy')->login($pharmacy_create);
        // return redirct //
        return redirect()->route('pharmacy.profile',$pharmacy_create['id']);
    }
    /* end of function */
    public function profile($id){
        $pharmacy = Pharmacy::find($id);
        return view('backEnd.pharmacy.profile',compact('pharmacy'));
    }
    /* function logout */
    public function logout(){
        Auth::guard('pharmacy')->logout();
        return redirect()->route('indexRoute');
    }
    /* end of function */
}
