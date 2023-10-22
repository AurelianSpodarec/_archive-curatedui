<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Platform;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function createPlatformCategories(string $platform)
    {
        // Platform::factory()->create([
        //     'name' => $platform,
        //     'slug' => $platform,
        // ]);
    }
     
    public function run()
    {
        $industries = ['webite', 'application', 'mobile'];
    
        collect($industries)->each(fn (string $platform) => 
            $this->createPlatformCategories($platform)
        );
    }
}
