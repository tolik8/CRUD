<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request): RedirectResponse
    {
        $post = Post::create($request->validated());
        $post->tags()->attach($request->tags);
        return redirect()->route('posts.index')->with('success', __('main.record.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        $tags = $post->tags;
        return view('posts.show', compact('post', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        $categories = Category::all();
        $tags = Tag::all();
        $selectedTags = $post->tags()->pluck('id')->toArray();
        return view('posts.edit', compact('post', 'categories', 'tags', 'selectedTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $post->fill($request->validated())->save();
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success', __('main.record.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        try {
            $post->delete();
        } catch (\Exception $e) {
            //
        }
        return redirect()->route('posts.index')->with('success', __('main.record.deleted'));
    }
}
