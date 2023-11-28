<?php

namespace App\Http\Controllers;

// use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $Title = 'Login';
        $Title2 = 'CafeCityGuide - Login';
        if (Auth::check()) {
            return redirect()->route('admin.list');
        }
        return view('auth.login', compact(['Title', 'Title2']));
    }

    public function authLogin(Request $request)
    {
        if (Auth::attempt(['nim' => $request->nim, 'password' => $request->password])) {
            $user = Auth::user();
            return redirect()->route('admin.list');
        }

        return redirect()->back()->with('error', "The admin's data doesn't match in the system.");
    }

    public function authLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
