<?php

namespace Database\Factories\Site;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SiteCategoryPageFactory extends Factory
{

    public function definition()
    {
        $name = $this->faker->word();

        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . rand(1111, 9999),
        ];
    }
}
