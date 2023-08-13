<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke(Post $post): RedirectResponse
    {
        $this->service->destroy($post);
        return redirect()->route('posts.index')->with('success', __('main.record.deleted'));
    }
}
