<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Jiri;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\JiriStoreRequest;

class JiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $upcomingJiris = Auth::user()->upcomingJiris;
        $pastJiris = Auth::user()->pastJiris;

        return view('jiri.index', compact('pastJiris', 'upcomingJiris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $contacts = Auth::user()->contacts;
        $projects = Auth::user()->projects;

        return view('jiri.create', compact('contacts', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JiriStoreRequest $request): RedirectResponse
    {
        /** @var \App\Models\Jiri $jiri */
        $jiri = Jiri::create($request->validated());

        $jiri->projects()->attach($request->projects);
        $jiri->students()->attach($request->students);
        $jiri->evaluators()->attach($request->evaluators);

        return to_route('jiri.show', $jiri);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jiri $jiri)
    {
        $jiri->load(['students', 'evaluators']);

        return view('jiri.show', compact('jiri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jiri $jiri): View
    {
        return view('jiri.edit', compact('jiri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JiriStoreRequest $request, Jiri $jiri): RedirectResponse
    {
        $jiri->update($request->validated());

        return to_route('jiri.show', $jiri);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jiri $jiri): RedirectResponse
    {
        $jiri->delete();

        return to_route('jiri.index');
    }
}
