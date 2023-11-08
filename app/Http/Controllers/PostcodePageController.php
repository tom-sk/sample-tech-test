<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostcodeRequest;
use App\Models\LocalPostcode;
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
        $formattedPostCode = strtolower(str_replace(' ', '', $validated->postcode));

        if(LocalPostcode::where('postcode', $formattedPostCode)->exists()) {
            $postcode = LocalPostcode::where('postcode', $formattedPostCode)->first();
        } else {
            $info = Postcode::getPostcode($formattedPostCode);

            $postcode = LocalPostcode::create([
                'postcode' => $formattedPostCode,
                'parish' => $info->parish,
                'nuts' => $info->nuts,
                'pfa' => $info->pfa,
            ]);
        }

        return redirect()->route('pages.postcode')
            ->with([
                'postcode' => $validated->postcode,
                'parish' => $postcode->parish,
                'nuts' => $postcode->nuts,
                'pfa' => $postcode->pfa,
            ])
            ->withErrors($validated->postcode, 'postcode');
    }
}
