<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post): RedirectResponse
    {
        $this->service->update($request, $post);
        return redirect()->route('posts.index')->with('success', __('main.record.updated'));
    }
}
