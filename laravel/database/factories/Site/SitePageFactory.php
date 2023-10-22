<?php

namespace Database\Factories\Site;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site\SitePage>
 */
class SitePageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'site_id' => 1,
            'site_category_page_id' => 1,
            // 'parent_id' => null,
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            // 'site_version_id' => 1,
        ];
    }
}