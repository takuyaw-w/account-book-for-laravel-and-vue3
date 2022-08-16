<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class LoginService
{
    public function signIn(array $credentials): Redirector | RedirectResponse
    {
        if (Auth::attempt($credentials)) {
            return redirect(route('dashboard'));
        }

        return back()->withErrors(['AuthError' => 'メールアドレスまたはパスワードに誤りがあります。']);
    }

    public function logout(): Redirector | RedirectResponse
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect(route('login'));
    }
}
