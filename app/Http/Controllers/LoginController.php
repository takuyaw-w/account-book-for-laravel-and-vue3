<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    public function __construct(LoginService $service)
    {
        $this->loginService = $service;
    }

    public function index()
    {
        return view('login.index');
    }

    public function signIn(LoginRequest $request)
    {
        $credentials = $request->safe()->only('email', 'password');
        return $this->loginService->signIn($credentials);
    }

    public function logout(Request $request)
    {
        return $this->loginService->logout();
    }
}
