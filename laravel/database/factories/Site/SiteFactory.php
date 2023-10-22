<?php

namespace Database\Factories\Site;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\User;

class SiteFactory extends Factory
{
    public function definition()
    {

        $name = $this->faker->word();

        return [
            'user_id' => User::all()->random()->id,
            'site_category_type_id' => 1,

            'logo' => 'https://b.stripecdn.com/site-srv/assets/img/v3/jobs_v2/thumbnails/stripe-6398a2d21ec3dcc6ee147a058b46de3624e50178e38541d0177b8cddeb845f87.jpg',
            'name' => $name,
            'slug' => Str::slug($name) . '-' . rand(1111, 9999),

            'thumbnail' => 'https://i.imgur.com/etp80mi.png'
        ];
    }
}
