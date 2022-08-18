<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpService
{
    public function signUp(array $user)
    {
        $registerUser =  User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password'])
        ]);
        return $registerUser;
    }
}
