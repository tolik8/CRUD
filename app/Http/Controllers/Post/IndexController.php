<?php

namespace App\Http\Controllers\Post;

use App\Models\Pet;
use Illuminate\Contracts\View\View;

class IndexController extends BaseController
{
    public function __invoke(): View
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }
}
