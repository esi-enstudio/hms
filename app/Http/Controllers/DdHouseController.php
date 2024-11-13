<?php

namespace App\Http\Controllers;

use App\Http\Resources\DdHouseResource;
use App\Models\DdHouse;
use App\Http\Requests\UpdateDdHouseRequest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Response;
use Inertia\ResponseFactory;

class DdHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response|ResponseFactory
    {
        return inertia('DdHouse/Index', [
            'ddHouses' => DdHouseResource::collection(DdHouse::when($request->search,function ($query, $search){
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('code', 'LIKE', "%{$search}%");
            })
                ->latest()
                ->paginate(5)
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
        return inertia('DdHouse/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'code'              => ['required'],
            'name'              => ['required','string'],
            'cluster'           => ['nullable','string'],
            'region'            => ['nullable','string'],
            'district'          => ['nullable','string'],
            'thana'             => ['nullable','string'],
            'email'             => ['nullable','email','lowercase','max:255'],
            'address'           => ['nullable'],
            'proprietor_name'   => ['nullable','string'],
            'contact_number'    => ['nullable','numeric','digits:11','unique:dd_houses'],
            'poc_name'          => ['nullable','string'],
            'poc_number'        => ['nullable','numeric','digits:11','unique:dd_houses'],
            'lifting_date'      => ['nullable','date'],
            'remarks'           => ['nullable'],
        ]);

        if (DdHouse::create($attributes))
        {
            return to_route('ddHouse.index')->with('msg', 'New dd House created successfully.');
        }

        return to_route('ddHouse.index')->with('msg', 'DD House not created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DdHouse $ddHouse): Response|ResponseFactory
    {
        $ddHouse->created = Carbon::parse($ddHouse->created_at)->toDayDateTimeString();
        $ddHouse->last_update = Carbon::parse($ddHouse->updated_at)->toDayDateTimeString();
        $ddHouse->lifting_date = Carbon::parse($ddHouse->lifting_date)->toFormattedDayDateString();

        return inertia('DdHouse/Show', [
            'ddHouse' => $ddHouse
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DdHouse $ddHouse): Response|ResponseFactory
    {
        return inertia('DdHouse/Edit', ['ddHouse' => $ddHouse]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DdHouse $ddHouse)
    {
        $attributes = $request->validate([
            'code'              => ['required'],
            'name'              => ['required','string'],
            'cluster'           => ['nullable','string'],
            'region'            => ['nullable','string'],
            'district'          => ['nullable','string'],
            'thana'             => ['nullable','string'],
            'email'             => ['nullable','email','lowercase','max:255'],
            'address'           => ['nullable'],
            'proprietor_name'   => ['nullable','string'],
            'contact_number'    => ['nullable','numeric','digits:11','unique:dd_houses,contact_number'.$ddHouse->id],
            'poc_name'          => ['nullable','string'],
            'poc_number'        => ['nullable','numeric','digits:11','unique:dd_houses,poc_number'.$ddHouse->id],
            'lifting_date'      => ['nullable','date'],
            'remarks'           => ['nullable'],
        ]);

        if ($ddHouse->update($attributes))
        {
            return to_route('ddHouse.index')->with('msg', 'Information updated successfully.');
        }

        return to_route('ddHouse.index')->with('msg', 'Information not updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DdHouse $ddHouse): RedirectResponse
    {
        $ddHouse->delete();

        return to_route('ddHouse.index')->with('msg', 'DD house deleted successfully.');
    }
}
