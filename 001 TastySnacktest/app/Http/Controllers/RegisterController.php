<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.regis', [
            'title' => 'LOGIN'
        ]);
    }
    public function store(Request $request)
    {
        $request['admins_status'] = 0;
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|same:password_confirmation|min:8|max:40|',
            'password_confirmation' => 'min:8|max:40',
            'address' => 'required|min:8',
        ]);
        // $validatedData['profile_img'] = 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg';
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'Registration was successful');
        return redirect('/login');
    }
}
