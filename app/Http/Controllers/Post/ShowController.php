<?php

namespace App\Http\Controllers\Post;

use App\Models\Pet;
use Illuminate\Contracts\View\View;

class ShowController extends BaseController
{
    public function __invoke(Pet $pet): View
    {
        $tags = $pet->tags;
        return view('pets.show', compact('pet', 'tags'));
    }
}
