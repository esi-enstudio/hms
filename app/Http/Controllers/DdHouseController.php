<?php

namespace App\Http\Controllers;

use App\Models\DdHouse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class DdHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        return view('site.dd-house.index',[
            'houses' => DdHouse::latest()->paginate(10)
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
    public function update(Request $request, DdHouse $ddHouse)
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
