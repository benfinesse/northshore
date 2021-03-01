<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function signingin(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        //todo signin logic

        if(Auth::attempt(['username'=>$request->input('username'),'password'=>$request->input('password')],[$request->input('remember')])){
            return redirect(route('cms.dashboard'));
        }else{
            return back()->withErrors(array('username'=>'Invalid Credentials Given!'))->withInput($request->input());
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect(route('cms.signin'));
    }
}
