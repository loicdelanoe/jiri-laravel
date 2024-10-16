<?php

namespace App\Http\Controllers;

use App\Http\Requests\JiriStoreRequest;
use App\Models\Jiri;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $upcomingJiris = Jiri::where('starting_at', '>', now())
            ->orderBy('starting_at')
            ->get();
        $pastJiris = Jiri::where('starting_at', '<', now())
            ->orderBy('starting_at', 'desc')
            ->get();

        return view('jiri.index', compact('pastJiris', 'upcomingJiris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jiri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JiriStoreRequest $request): RedirectResponse
    {
        $jiri = Jiri::create($request->validated());

        return to_route('jiri.show', $jiri);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jiri $jiri): View
    {
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
    public function destroy(Jiri $jiri)
    {
        $jiri->delete();

        return to_route('jiri.index');
    }
}
