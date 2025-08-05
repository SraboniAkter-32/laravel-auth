<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api',['except'=>['register','login']]);
    }

    public function register(Request $request){
        
    }
    public function login(Request $request){

    }
}
