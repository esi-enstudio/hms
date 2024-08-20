<?php

namespace App\Http\Controllers;

use App\Models\Rso;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class RsoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        return view('site.rso.index', [
            'rsos' => Rso::latest()->paginate(10)
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rso $rso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rso $rso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rso $rso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rso $rso)
    {
        //
    }
}
