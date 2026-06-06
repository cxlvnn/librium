<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = User::create($request->validated());

        return Inertia::render('Home', [
            'user' => $user,
        ]);
    }

    public function login(LoginUserRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return Inertia::render('Home', [
                'user' => Auth::user(),
            ]);
        }
    }
}
