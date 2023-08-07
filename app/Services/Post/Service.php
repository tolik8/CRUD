<?php

namespace App\Services\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class Service
{
    public function store (StoreRequest $request): void
    {
        $post = Post::create($request->validated());
        $post->tags()->attach($request->tags);
    }

    public function update (UpdateRequest $request, Post $post): void
    {
        $post->fill($request->validated())->save();
        $post->tags()->sync($request->tags);
    }
}
