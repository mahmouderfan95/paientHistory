<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;

class backEndController extends Controller
{
    /* function index */
    public function index(){
        return view('backEnd.index');
    }

    /* end of function */
    /* function index register */
    public function indexRegister(){
        return view('backEnd.indexRegister');
    }
    /* end of function */
    public function login(REQUEST $request){
        $arr = [
            'email' => 'required|email',
            'password'  => 'required'
        ];

        $vaild = Validator::make($request->all(),$arr);
        if($vaild->fails()){
            return response()->json(['status'=> false]);
        }
        if(! Auth::guard($request->get('guard'))->attempt(['email'=>$request->email,
        'password'  => bcrypt($request->password)])){
            return dd($request->all());
        }
        return redirect($request->get('guard') . '/profile' . $request->id);


    }
}
