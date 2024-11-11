<?php

namespace App\Http\Controllers;

use App\Http\Resources\DdHouseResource;
use App\Http\Resources\UserResource;
use App\Models\DdHouse;
use App\Http\Requests\StoreDdHouseRequest;
use App\Http\Requests\UpdateDdHouseRequest;
use Illuminate\Http\Request;
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
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDdHouseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DdHouse $ddHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DdHouse $ddHouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDdHouseRequest $request, DdHouse $ddHouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DdHouse $ddHouse)
    {
        //
    }
}
