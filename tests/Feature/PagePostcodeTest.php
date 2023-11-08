<?php

use function Pest\Laravel\post;

test('user can submit postcode', function () {
    // Arrange
    $response = post(route('pages.postcode.store'), [
        'postcode' => 'SW1A 1AA',
    ]);

    // Act & Assert
    $response
        ->assertStatus(302)
        ->assertRedirect(route('pages.postcode'));
});

test('user can not submit invalid postcode', function () {
    // Arrange
    $response = post(route('pages.postcode.store'), [
        'postcode' => '!!!',
    ]);

    // Act & Assert
    $response
        ->assertSessionHasErrors('postcode')
        ->assertStatus(302)
        ->assertRedirect(route('pages.postcode'));
});
