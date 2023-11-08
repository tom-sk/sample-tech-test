<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostcodeRequest;
use JustSteveKing\LaravelPostcodes\Facades\Postcode;

class PostcodePageController extends Controller
{
    public function __invoke()
    {
        return view('pages.postcode');
    }

    public function store(PostcodeRequest $request)
    {
        $validated = $request->toDto();

        $info = Postcode::getPostcode($validated->postcode);

        return redirect()->route('pages.postcode')
            ->with([
                'postcode' => $validated->postcode,
                'parliamentary_constituency' => $info->parliamentary_constituency,
                'nuts' => $info->nuts,
                'pfa' => $info->pfa,
            ])
            ->withErrors($validated->postcode, 'postcode');
    }
}
