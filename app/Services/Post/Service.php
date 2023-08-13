<?php

namespace App\Services\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

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

    public function destroy (Post $post): bool|string
    {
        try {
            DB::beginTransaction();
            $post->delete();
            $post->tags()->sync([]);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return true;
    }
}
