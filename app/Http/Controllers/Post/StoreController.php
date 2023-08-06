<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $this->service->store($request);
        return redirect()->route('pets.index')->with('success', __('main.record.created'));
    }
}
