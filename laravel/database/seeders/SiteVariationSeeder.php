<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Site\SiteVariation;

class SiteVariationSeeder extends Seeder
{

    public function createVariation($device, $theme) {
        SiteVariation::factory()->create([
            'device' => $device,
            'theme' => $theme,
        ]);
    }
    
    public function run()
    {   

        $pageVariation = [
            [
                "device" => "mobile",
                "theme" => "light"
            ],
            [
                "device" => "mobile",
                "theme" => "dark"
            ],
            [
                "device" => "desktop",
                "theme" => "light"
            ],
            [
                "device" => "desktop",
                "theme" => "dark"
            ],
        ];

        collect($pageVariation)->each(fn ($variation) => 
            $this->createVariation($variation['device'], $variation['theme'])
        );
    }
}