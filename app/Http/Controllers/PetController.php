<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Category;
use App\Models\Pet;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('pets.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetRequest $request): RedirectResponse
    {
        $pet = Pet::create($request->validated());
        $pet->tags()->attach($request->tags);
        return redirect()->route('pets.index')->with('success', __('main.record.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet): View
    {
        $tags = $pet->tags;
        return view('pets.show', compact('pet', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet): View
    {
        $categories = Category::all();
        $tags = Tag::all();
        $selectedTags = $pet->tags()->pluck('id')->toArray();
        return view('pets.edit', compact('pet', 'categories', 'tags', 'selectedTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PetRequest $request, Pet $pet): RedirectResponse
    {
        $pet->fill($request->validated())->save();
        $pet->tags()->sync($request->tags);
        return redirect()->route('pets.index')->with('success', __('main.record.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet): RedirectResponse
    {
        try {
            $pet->delete();
        } catch (\Exception $e) {
            //
        }
        return redirect()->route('pets.index')->with('success', __('main.record.deleted'));
    }
}
