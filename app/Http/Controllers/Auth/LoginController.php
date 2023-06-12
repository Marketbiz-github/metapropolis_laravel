<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function indexReseller()
    {
        return view('auth.loginReseller');
    }
    public function indexDropshipper()
    {
        return view('auth.loginDropshipper');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function register_dropshipper()
    {
        return view('auth.register_dropshipper');
    }

    public function autenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard_admin');
        }
 
        return back()->with('login_error', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}
