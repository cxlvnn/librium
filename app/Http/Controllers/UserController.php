<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class UserController extends Controller
{
    public function show()
    {
        $data = [
            'id' => 1,
            'name' => 'Behruz',
            'email' => 'behruz@gmail.com',
        ];

        return Inertia::render('Home', [
            'data' => $data,
        ]);
    }
}
