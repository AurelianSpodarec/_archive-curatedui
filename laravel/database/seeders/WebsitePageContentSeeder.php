<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\WebsitePageContent;

class WebsitePageContentSeeder extends Seeder
{
    public function createPageContentDesktop($content)
    {
        WebsitePageContent::factory()->create([
            'image' => 'https://i.imgur.com/B04xCag.png',
            'is_mobile' => false,
            'is_dark' => false,
            'version' => ""
        ]);
    }

    public function createPageContentMobile($content)
    {
        WebsitePageContent::factory()->create([
            'image' => 'https://i.imgur.com/B04xCag.png',
            'is_mobile' => false,
            'is_dark' => false,
            'version' => ""
        ]);
    }



    public function run()
    {
      

    }
}



// For each WebsitePage, create 8 variations e.g

// Home Page

// Desktop
// ========================
// Mobile: false
// Dark: false
// ------------------------
// Mobile: false
// Dark: true

// Mobile
// ========================
// Mobile: true
// Dark: false
// ------------------------
// Mobile: true
// Dark: true
