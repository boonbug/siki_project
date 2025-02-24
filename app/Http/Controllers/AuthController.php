<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Http\Requests\LoginRequest;


class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function checkLogin(LoginRequest $request)
    {
        $cred = $request->only('email', 'password');
        if(Auth::attempt($cred))
        {
            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        }else{
            return back()->with('error', "Creaditional are wrong");
        }
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('admin.dashboard');
        }else{
            return redirect()->route('loginView');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('loginView');
    }
}
