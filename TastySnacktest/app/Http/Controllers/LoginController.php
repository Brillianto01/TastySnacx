<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use PDO;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            'title' => 'LOGIN'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if ($request->remember) {
            Cookie::queue('email', $credentials['email'], 1);
        }

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('failed', 'Login Failed');
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');
    }
}
