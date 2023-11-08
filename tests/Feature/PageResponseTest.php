<?php
use function Pest\Laravel\get;

it('has a welcome page', function () {
    //     Act & Assert
    get(route('pages.postcode'))->assertOk();
});

