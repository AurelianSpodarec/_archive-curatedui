<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Component>
 */
class ComponentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    

    public function definition()
    {


        return [
            'company_id' => 1,
            'component_category_id' => '1'
        ];
    }
}
// Does a component belong to a 'page'? optional
// Does a component have dark mode this and that mode