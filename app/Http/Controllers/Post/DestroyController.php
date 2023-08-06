<?php

namespace App\Http\Controllers\Post;

use App\Models\Pet;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke(Pet $pet): RedirectResponse
    {
        try {
            $pet->delete();
        } catch (\Exception $e) {
            //
        }
        return redirect()->route('pets.index')->with('success', __('main.record.deleted'));
    }
}
