<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Hosptail;
use App\Http\Requests\backEnd\hosptail\Store;
use Illuminate\Support\Facades\Mail;
use App\Mail\hosptailCreate;
use Auth;
use Image;

class hosptailController extends Controller
{
    public function register(){
        return view('backEnd.hosptail.register');
    }
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/hosptail/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload Clinic_License */
        if($request->Hosptail_License){
            $img = Image::make($request->Hosptail_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/hosptail/' . $request->Hosptail_License->hashName()));
            $request_data['Hosptail_License'] = $request->Hosptail_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'hosptail';
        /* insert data */
        $hosptail_create = Hosptail::create($request_data);
        /* send mail */
        Mail::to($hosptail_create->email)->send(new hosptailCreate($hosptail_create));
        /* login clinic */
        Auth::guard('hosptail')->login($hosptail_create);
        // return redirct //
        return redirect()->route('hosptail.profile',$hosptail_create['id']);
    }
    /* function hosptail */
    public function profile($id){
        $hosptail = Hosptail::find($id);
        return view('backEnd.hosptail.profile',compact('hosptail'));
    }
    /* end of function */
    public function logout(){
        Auth::guard('hosptail')->logout();
        return redirect()->route('indexRoute');
    }
}
