<?php

namespace App\Http\Requests;

use App\DataTransferObjects\PostcodeData;
use Illuminate\Foundation\Http\FormRequest;
use JustSteveKing\LaravelPostcodes\Rules\Postcode;
use JustSteveKing\LaravelPostcodes\Service\PostcodeService;

class PostcodeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'postcode' => [
                'required',
                new Postcode(resolve(PostcodeService::class))
            ],
        ];
    }

    public function toDto(): PostcodeData
    {
        return new PostcodeData(
            postcode: $this->validated('postcode'),
        );
    }
}
