<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ComponentCategory;

class ComponentSeeder extends Seeder
{

    public function run()
    {
        // $componentNames = ComponentCategory::all();
        // // should be dynamic from database 
        // Component::factory()->create([
        //     'name' => $componentNames,
            
        // ]);
    }
}

// Create 1-5 components per company