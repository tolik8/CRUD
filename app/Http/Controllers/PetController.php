<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pets.index', ['data' => Pet::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetRequest $request)
    {
        $result = Pet::create($request->validated());

        if (!is_object($result)) {
            return redirect()->route('pets.create');
        }

        return redirect()->route('pets.index')->with('success', __('home.record.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show', ['data' => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit', ['data' => $pet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PetRequest $request, Pet $pet)
    {
        $result = $pet->fill($request->validated())->save();

        if (!$result) {
            return redirect()->route('pets.edit', ['data' => $pet]);
        }

        return redirect()->route('pets.index')->with('success', __('home.record.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        try {
            $pet->delete();
        } catch (\Exception $e) {

        }
        return redirect()->route('pets.index')->with('success', __('home.record.deleted'));
    }
}
