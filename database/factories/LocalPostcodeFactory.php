<?php

namespace Database\Factories;

use App\Models\LocalPostcode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LocalPostcodeFactory extends Factory
{
    protected $model = LocalPostcode::class;

    public function definition(): array
    {
        return [
            'postcode' => $this->faker->postcode(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
