<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();

        return Inertia::render('User/Profile', ['user' => $user]);
    }
}
