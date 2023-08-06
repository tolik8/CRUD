<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Pet;
use App\Models\Tag;
use Illuminate\Contracts\View\View;

class EditController extends BaseController
{
    public function __invoke(Pet $pet): View
    {
        $categories = Category::all();
        $tags = Tag::all();
        $selectedTags = $pet->tags()->pluck('id')->toArray();
        return view('pets.edit', compact('pet', 'categories', 'tags', 'selectedTags'));
    }
}
