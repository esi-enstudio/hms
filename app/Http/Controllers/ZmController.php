<?php

namespace App\Http\Controllers;
use App\Http\Resources\ZmResource;
use App\Models\Zm;
use App\Http\Requests\StoreZmRequest;
use App\Http\Requests\UpdateZmRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class ZmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response|ResponseFactory
    {
        return inertia('Zm/Index', [
            'zms' => ZmResource::collection(Zm::when($request->search,function ($query, $search){
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('number', 'LIKE', "%{$search}%")
                    ->orWhere('designation', 'LIKE', "%{$search}%");
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
    public function store(StoreZmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Zm $zm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Zm $zm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZmRequest $request, Zm $zm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zm $zm)
    {
        //
    }
}
