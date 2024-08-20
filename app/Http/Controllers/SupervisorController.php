<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        return view('site.supervisor.index', [
            'supervisors' => Supervisor::latest()->paginate(10)
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
    public function show(Supervisor $supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supervisor $supervisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supervisor $supervisor)
    {
        //
    }
}
