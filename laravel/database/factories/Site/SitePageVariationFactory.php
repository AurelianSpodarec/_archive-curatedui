<?php

namespace Database\Factories\Site;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site\SitePageImage>
 */
class SitePageVariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "site_page_id" => 1,
            "site_variation_id" => 1
            // "image" => "https://i.imgur.com/KW88w6I.png"
        ];
    }
}
// https://i.imgur.com/B04xCag.png