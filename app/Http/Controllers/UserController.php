<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function LoginFunction(Request $request){
        $login=$request->validate([
            'name'=>'required',
            'password'=>'required',
        ]);
        if (Auth::attempt($login)) {
            return redirect('/main');
        }else {
            return redirect('/')->with('message','Login failed maybe username or password wrong');
        }
    }
    public function LogoutFunction(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','Logout success');
    }
}
