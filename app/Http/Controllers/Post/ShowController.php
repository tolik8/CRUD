<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class ShowController extends BaseController
{
    public function __invoke(Post $post): View
    {
        $tags = $post->tags;
        return view('posts.show', compact('post', 'tags'));
    }
}
