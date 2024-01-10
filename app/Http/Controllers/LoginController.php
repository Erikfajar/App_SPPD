<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->to('dashboard')->with('toast_success','Berhasil Login!!');
        }else{
            Session::flash('status','failed');
            Session::flash('message','Login gagal!');
            Session::flash('info','Email atau Password yang dimasukan salah !!');
            return back();
        }
 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
