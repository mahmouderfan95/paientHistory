<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Lab;
use App\Http\Requests\backEnd\labs\Store;
use Auth;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\LabCreate;
class labsController extends Controller
{
    public function register(){
        return view('backEnd.labs.register');
    }
    public function postRegister(Request $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/lab/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload lab_License */
        if($request->labs_License){
            $img = Image::make($request->labs_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/lab/' . $request->labs_License->hashName()));
            $request_data['labs_License'] = $request->labs_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'labs';
        /* insert data */
        $lab_create = Lab::create($request_data);
        /* send mail */
        Mail::to($lab_create->email)->send(new LabCreate($lab_create));
        /* login */
        Auth::guard('lab')->login($lab_create);
        // return redirct //
        return redirect()->route('labs.profile',$lab_create['id']);
    }
}
