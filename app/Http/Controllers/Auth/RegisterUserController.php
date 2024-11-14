<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Response;
use Inertia\ResponseFactory;

class RegisterUserController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        return inertia('Auth/Register');
    }

    public function attempt(Request $request): RedirectResponse
    {
        // Validation
        $attributes = $request->validate([
            'avatar'    => ['nullable','image','max:1000'],
            'name'      => ['required','max:150'],
            'email'     => ['required','lowercase','max:255','unique:users,email'],
            'phone'     => ['required','numeric','unique:users,phone'],
            'password'  => ['required','min:8','confirmed'],
        ]);

        if ($request->hasFile('avatar'))
        {
            $attributes['avatar'] = Storage::disk('public')->put('avatars', $request->avatar);
        }

        // Create Use
        $user = User::create($attributes);

        event(new Registered($user));

        // Login
        Auth::login($user);

        // Redirect
        return to_route('home')->with('msg', 'New user ['.$user['name'].'] was created successfully.');
    }
}
