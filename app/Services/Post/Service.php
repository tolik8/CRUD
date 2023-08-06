<?php

namespace App\Services\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Pet;

class Service
{
    public function store (StoreRequest $request): void
    {
        $pet = Pet::create($request->validated());
        $pet->tags()->attach($request->tags);
    }

    public function update (UpdateRequest $request, Pet $pet): void
    {
        $pet->fill($request->validated())->save();
        $pet->tags()->sync($request->tags);
    }
}
