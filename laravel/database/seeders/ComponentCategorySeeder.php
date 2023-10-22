<?php

namespace Database\Seeders;

use App\Models\ComponentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentCategorySeeder extends Seeder
{
    public function createComponentcategory($name)
    {
        ComponentCategory::factory()->create([
            'name' => $name,
            'slug' => strtolower(str_replace(' ', '-', $name))
        ]);
    }
    public function run()
    {
        $componentsCategory = ["Hero", "Header", "Heading", "Stats", "Feature", "Footer", "Pricing", "Reviews", "Logo Cloud", "Call To Action", "FAQ", "Cookie", "Gallery", "Carousel", "404", "Upsells/Cross-Sell", "Featured", "Products"];
        collect($componentsCategory)->each(fn ($category) => 
            $this->createComponentcategory($category)
        );
    }
}
