<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public static function index()
    {
        $con = 1;
        if (Auth::user()->profile_img == 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg') {
            $con = 2;
        }
        // dd($con);
        return view('profile', ['cons' => $con], ['user' => Auth::user()]);
    }
    public static function edit()
    {
        return view('login.updateProfile', [
            'title' => 'Update you Profile',
        ]);
    }

    public static function store(Request $request)
    {
        $userid = Auth::user()->id;
        $validatedData = $request->validate([
            'name' => 'min:3|max:40',
            'email' => 'email:dns|',
            'address' => 'min:8',
        ]);
        if ($request->file('profile_img')) {
            $validatedData['profile_img'] = $request->file('profile_img')->store('profile-images');
        } else {
            $validatedData['profile_img'] = 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg';
        }
        User::where('id', $userid)
            ->update($validatedData);
        return redirect('/profile');
    }
}
