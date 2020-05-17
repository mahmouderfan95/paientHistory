<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Xray;
use App\Http\Requests\backEnd\xray\Store;
use Illuminate\Support\Facades\Mail;
use App\Mail\xrayCreate;
use Auth;
use Image;
class xrayController extends Controller
{
    /* function register */
    public function register(){
        return view('backEnd.xray.register');
    }
    /* end of function */
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/xray/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload Clinic_License */
        if($request->Clinic_License){
            $img = Image::make($request->Clinic_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/xray/' . $request->Clinic_License->hashName()));
            $request_data['Clinic_License'] = $request->Clinic_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'xray';
        /* insert data */
        $xray_create = Xray::create($request_data);
        /* send mail */
        Mail::to($xray_create->email)->send(new xrayCreate($xray_create));
        /* login */
        Auth::guard('xray')->login($xray_create);
        // return redirct //
        return redirect()->route('xray.profile',$xray_create['id']);
    }
    /* end of function */
    /* function profile */
    public function profile($id){
        $xray = Xray::find($id);
        return view('backEnd.xray.profile',compact('xray'));
    }
    /* end of function */
    /* function logout */
    public function logout(){
        Auth::guard('x-ray')->logout();
        return redirect()->route('indexRoute');
    }
    /* endof function */
}
