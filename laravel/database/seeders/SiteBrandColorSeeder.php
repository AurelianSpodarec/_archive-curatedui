<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Site\SiteBrandColor;

class SiteBrandColorSeeder extends Seeder
{

    public function createBrandColor($name, $hex) {
        SiteBrandColor::factory()->create([
            'name' => $name,
            'slug' => $name,
            'hex' => $hex
        ]);
    }

    public function run()
    {
        $colors = [
            [
                'name' => 'orange',
                'hex'=> 'orange',
                'slug' => 'orange'
            ],
            [
                'name' => 'yellow',
                'hex'=> 'yellow',
                'slug' => 'yellow'
            ],
            [
                'name' => 'red',
                'hex'=> 'red',
                'slug' => 'red'
            ],
            [
                'name' => 'pink',
                'hex'=> 'pink',
                'slug' => 'pink'
            ],
            [
                'name' => 'purple',
                'hex'=> 'purple',
                'slug' => 'purple'
            ],
            [
                'name' => 'blue',
                'hex'=> 'blue',
                'slug' => 'blue'
            ],
            [
                'name' => 'green',
                'hex'=> 'green',
                'slug' => 'green'
            ],
            [
                'name' => 'gray',
                'hex'=> 'gray',
                'slug' => 'gray'
            ],
            [
                'name' => 'black',
                'hex'=> 'black',
                'slug' => 'black'
            ]
        ];

        collect($colors)->each(fn ($color) => 
            $this->createBrandColor($color['name'], $color['hex'])
        );
    }
}
