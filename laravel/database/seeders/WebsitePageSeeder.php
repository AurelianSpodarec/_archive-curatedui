<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\WebsitePage;

class WebsitePageSeeder extends Seeder
{
    public function createPage($page) 
    {
        WebsitePage::factory()->create([
            'name' => $page,
            'slug' => $page,
        ]);  
    }
    
    public function run()
    {
        $pages = ['Home', 'About', 'Contact', 'Cart', 'Careers', 'Pricing', 'Team', 'Services', 'Case Studies'];

        collect($pages)->each(fn (string $page) => 
            $this->createPage($page)
        );
    }
}
