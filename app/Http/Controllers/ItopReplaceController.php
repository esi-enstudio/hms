<?php

namespace App\Http\Controllers;

use App\Models\ItopReplace;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ItopReplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        return view('site.itop-replace.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('site.itop-replace.create');
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
    public function show(ItopReplace $itopReplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItopReplace $itopReplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItopReplace $itopReplace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItopReplace $itopReplace)
    {
        //
    }
}
