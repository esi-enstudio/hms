<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // Validation
        $attributes = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        // Create Use
        $user = User::create($attributes);

        // Login
        Auth::login($user);

        // Redirect
        return to_route('home');
    }
}
