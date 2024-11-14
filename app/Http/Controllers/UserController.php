<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Response;
use Inertia\ResponseFactory;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response|ResponseFactory
    {
        return inertia('User/Index', [
            'users' => UserResource::collection(User::when($request->search,function ($query, $search){
                $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('phone', 'LIKE', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString()),

            'searchTerm' => $request->search,
            'status' => session('msg'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response|ResponseFactory
    {
        return inertia('User/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $attributes = $request->validate([
            'avatar'    => ['nullable','file','max:1000','mimes:jpeg,jpg,png'],
            'name'      => ['required','max:150'],
            'role'      => ['required'],
            'email'     => ['required','lowercase','max:255','unique:users,email'],
            'phone'     => ['required','numeric','digits:11','unique:users,phone'],
            'password'  => ['required','min:8','confirmed'],
            'remarks'   => ['nullable'],
        ]);

        if ($request->hasFile('avatar'))
        {
            $attributes['avatar'] = Storage::disk('public')->put('avatars', $request->avatar);
        }

        // Create Use
        $user = User::create($attributes);

        event(new Registered($user));

        // Redirect
        return to_route('user.index')->with('msg', 'New user ['.$user['name'].'] was created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
