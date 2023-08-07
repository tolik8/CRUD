<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class IndexController extends BaseController
{
    public function __invoke(): View
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
