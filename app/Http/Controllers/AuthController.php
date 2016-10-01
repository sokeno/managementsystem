<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 10/1/2016
 * Time: 7:15 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function login(){


        if(Auth::attempt(['email'=> $request['email'],'password'=> $request['password']])){

            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
    public function register(){

        return view('auth.login');
    }
   

}