<?php

namespace Database\Factories\Site;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site\SiteVariation>
 */
class SiteVariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'device' => "desktop",
            'theme' => "dark"
        ];
    }
}