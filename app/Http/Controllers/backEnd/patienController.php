<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Patien;
use App\models\Agree;
use App\Http\Requests\backEnd\patien\Store;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\patienWelcome;
use Auth;

class patienController extends Controller
{
    public function register(){
        return view('backEnd.patien.register');
    }
    /* function register patient */
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/patien/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'patient';
        /* insert data */
        $patienData = Patien::create($request_data);
        /* send mail */
        // Mail::to($patienData->email)->send(new patienWelcome($patienData));
        /* login patien */
        Auth::guard('patien')->login($patienData);
        return redirect()->route('edit.profile',$patienData['id'])->with('msg','Data created success');
    }
    /* end of function */
    public function profile($id){
        $patient = Patien::findOrFail($id);
        return view('backEnd.patien.profile',compact('patient'));
    }
    public function editProfile($id){
        $patient = Patien::findOrFail($id);
        $agrees = Agree::get();
        return view('backEnd.patien.edit-profile',compact('patient','agrees'));
        // return dd(Patien::find(1)->first()->agrees());
    }
    public function updateProfile($id,REQUEST $request){
        // $patient = Patien::findOrFail($id);

    }
    public function logout(){
        Auth::guard('patien')->logout();
        return redirect()->route('indexRegister');
    }
}
