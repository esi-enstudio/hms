<?php

namespace App\Http\Controllers;

use App\Http\Resources\MdResource;
use App\Models\Md;
use App\Http\Requests\StoreMdRequest;
use App\Http\Requests\UpdateMdRequest;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class MdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response|ResponseFactory
    {
        return inertia('Md/Index', [
            'mds' => MdResource::collection(Md::when($request->search,function ($query, $search){
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('number', 'LIKE', "%{$search}%");
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
    public function store(StoreMdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Md $md)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Md $md)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMdRequest $request, Md $md)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Md $md)
    {
        //
    }
}
