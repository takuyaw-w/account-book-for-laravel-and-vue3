<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Services\SignUpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct(SignUpService $service)
    {
        $this->signUpService = $service;
    }

    public function index()
    {
        return view('register.index');
    }

    public function signUp(SignUpRequest $request)
    {
        $user = $this->signUpService->signUp($request->safe()->all());

        Auth::guard()->login($user);

        return redirect(route('home'));
    }
}
