<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    public function getLogin(){

        return view('auth.login');

    }

    public function getRegister(){

        return view('auth.register');

    }

    public function postRegister(){
        echo "registrar";
    }

    public function postLogin(Request $request)
    {

        if(Auth::attempt($request->except(['_method'=>'_token']))) {

                return redirect()->route('cart');

        } else {
            echo "Login ou Senha Inválidos";
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');

    }


    /* public function teste(){

        $data = ['email'=>'mauro@mauro','password'=>'123'];

        if(Auth::attempt($data)){
            echo "logado";
        }else{
            echo "erro";
        }

        if(Auth::check()){
            echo "voce está logado";
        }

    } */


}
