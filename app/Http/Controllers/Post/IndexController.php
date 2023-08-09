<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class IndexController extends BaseController
{
    public function __invoke(): View
    {
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }
}
