<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $cred = $request->only('email', 'password');
        if(Auth::attempt($cred))
        {
            return redirect()->route('dashboard')->with('sucess', 'Login Successfully');
        }else{
            return back()->with('error', "Creaditional are wrong");
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
