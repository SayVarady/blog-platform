<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function getLogin() {
        return view('layouts.auth.login');
    }

    public function login(LoginRequest $request) {
        $isValidUser = $request->validated();
        if(!$isValidUser) {
            return back()->with("failed", "Invalid credentail");
        }
        $user = User::authenticate($request);
        if(!$user) {
            return back()->with("failed", "Invalid Username");
        }
        session()->put('auth', $user);
        return redirect('dashboard');
    }

    public function getRegister() {
        return view('layouts.auth.register');
    }
    public function register() {
        return view('layouts.auth.register');
    }
}
