<?php

namespace Database\Seeders;

use App\Models\Site\SiteCategoryPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteCategoryPageSeeder extends Seeder
{
    public function createPageCategory($name) {
        SiteCategoryPage::factory()->create([
            'name' => $name,
            'slug' => str_replace(" ", "-", strtolower($name))
        ]);
    }

    public function run()
    {
        $sitePagesCategory = ['Home', 'About', 'Contact', 'Cart', 'Careers', 'Pricing', 'Team', 'Services', 'Case Studies'];

        collect($sitePagesCategory)->each(fn ($category) => 
            $this->createPageCategory($category)
        );
    }
}