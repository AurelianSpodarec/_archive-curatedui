<?php

namespace Database\Seeders;

// use App\Models\ComponentContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentContentSeeder extends Seeder
{
    
    // public function createContent($randomImages)
    // {
    //     ComponentContent::factory()->create([
    //         'image' => $randomImages[array_rand($randomImages, 1)]
    //     ]);
    // }

    public function run()
    {
        $randomImages = ["https://i.imgur.com/3lgNOGk.png", "https://i.imgur.com/CXO1kvF.png", "https://i.imgur.com/LHqlNdx.png"];
      
        // ComponentContent::factory()->create([
        //     'image' => $randomImages[array_rand($randomImages, 1)]
        // ]);

        // $variations = [
        //     [
        //         "mobile" => false,
        //         "dark" => true
        //     ],
        //     [
        //         "mobile" => false,
        //         "dark" => false
        //     ],
        //     [
        //         "mobile" => true,
        //         "dark" => true
        //     ],
        //     [
        //         "mobile" => true,
        //         "dark" => false
        //     ]
        // ];
    }
}
