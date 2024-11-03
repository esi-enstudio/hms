<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class RegisterUserController extends Controller
{
    public function create(): Response|ResponseFactory
    {
        return inertia('Auth/Register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
    }
}
