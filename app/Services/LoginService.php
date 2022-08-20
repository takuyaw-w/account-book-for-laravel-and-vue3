<?php

namespace App\Services;

use App\Models\Item;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class LoginService
{
    public function signIn(array $credentials): Redirector | RedirectResponse
    {
        if (Auth::attempt($credentials)) {
            session()->put(['userName' => Auth::user()->name]);
            return redirect(route('home'));
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
