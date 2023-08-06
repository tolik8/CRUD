<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Contracts\View\View;

class CreateController extends BaseController
{
    public function __invoke(): View
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('pets.create', compact('categories', 'tags'));
    }
}
