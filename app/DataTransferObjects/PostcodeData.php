<?php

namespace App\DataTransferObjects;

class PostcodeData
{
    public function __construct(
        public readonly string $postcode,
    ){
    }
}
