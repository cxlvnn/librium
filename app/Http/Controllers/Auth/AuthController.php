<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function showRegister()
    {
        return Inertia::render('Auth/Register');
    }

    public function showLogin()
    {
        return Inertia::render('Auth/Login');
    }

    public function register(RegisterUserRequest $request)
    {
        if ($user = User::create($request->validated())) {
            Auth::login($user);

            return Inertia::render('Home', [
                'user' => $user,
            ]);
        }

        return redirect()
            ->back();
    }

    public function login(LoginUserRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return to_route('books.index');
        }

        return redirect()
            ->back()
            ->withErrors(['email' => 'These credentials do not match our records']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }
}
