<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class backEndController extends Controller
{
    /* function index */
    public function index(){
        return view('backEnd.index');
    }

    /* end of function */

    public function indexRegister(){
        return view('backEnd.indexRegister');
    }
}
