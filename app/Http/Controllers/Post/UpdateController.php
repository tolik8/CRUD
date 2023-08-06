<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Pet;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Pet $pet): RedirectResponse
    {
        $this->service->update($request, $pet);
        return redirect()->route('pets.index')->with('success', __('main.record.updated'));
    }
}
