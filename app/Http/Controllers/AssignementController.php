<?php

namespace App\Http\Controllers;

use App\Models\Assignement;
use App\Models\Attendance;
use App\Models\Jiri;
use App\Models\Project;
use Illuminate\Http\Request;

class AssignementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Jiri $jiri)
    {
        $projects = $jiri->projects;
        
        return view('assignement.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
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
    public function update(Request $request, Assignement $assignement)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignement $assignement)
    {

    }
}
