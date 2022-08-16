<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }

    public function signIn(LoginRequest $request)
    {
        $credentials = $request->safe()->only('email', 'password');
        $request->session()->regenerateToken();

        if (Auth::attempt($credentials)) {
            // 認証に成功した
            return redirect(route('dashboard'));
        }
    }
}
