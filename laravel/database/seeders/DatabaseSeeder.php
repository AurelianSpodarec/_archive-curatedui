<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Sequence;

use App\Models\User;
use App\Models\Site\Site;
use App\Models\Site\SiteBrandColor;
use App\Models\Site\SiteCategoryPage;
use App\Models\Site\SitePage;
use App\Models\Site\SitePageVariation;

class DatabaseSeeder extends Seeder
{
 
    public function run()
    {

        $this->call([
            SiteBrandColorSeeder::class,
            SiteVariationSeeder::class,
            SiteCategoryPageSeeder::class
        ]);


        $users = User::factory(20)->create(); 
        User::create([
            'id' => 21,
            'name' => "Aurelian",
            'surname' => "Spodarec",
            'slug' => "aurelian",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('adminadmin'),
            'remember_token' => Str::random(10),
        ]);

        $siteThumbnails = [
            'https://media.itpro.co.uk/image/upload/s--X-WVjvBW--/f_auto,t_content-image-full-desktop@1/v1630489806/Google_office_Shutterstock.jpg',
            'https://www.protocol.com/media-library/people-surrounding-an-office-computer-with-discords-logo.png?id=27646053&width=1245&quality=85&coordinates=0%2C0%2C0%2C222&height=700',
            'https://www.incimages.com/uploaded_files/image/1920x1080/founders3_85311.jpg', 
            'https://www.thetimes.co.uk/imageserver/image/%2Fmethode%2Ftimes%2Fprod%2Fweb%2Fbin%2F54dfe32a-da55-11eb-b92f-5fe539a30c29.jpg?crop=2363%2C1329%2C22%2C921&resize=1200', 
            'https://e3.365dm.com/21/03/1600x900/skynews-china-beijing-nike_5317181.jpg?20210325094940'
        ];

        $siteLogos = [
            'https://b.stripecdn.com/site-srv/assets/img/v3/jobs_v2/thumbnails/stripe-6398a2d21ec3dcc6ee147a058b46de3624e50178e38541d0177b8cddeb845f87.jpg',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png',
            'https://i.pinimg.com/originals/38/ae/2a/38ae2afdcd25adb7fe01b117be986f77.jpg',
            'https://logos-world.net/wp-content/uploads/2020/04/Nike-Logo-1978-present.jpg'
        ];

        Site::factory()
        ->count(100)
        ->state(new Sequence(
            fn ($sequence) => [
                'user_id' => $users->random()->id,
                'site_brand_color_id' => SiteBrandColor::all()->random()->id,
                'logo' => $siteLogos[array_rand($siteLogos, 1)],
                'thumbnail' => $siteThumbnails[array_rand($siteThumbnails, 1)]
            ],
        ))->create();



        $sitePages = SitePage::factory()
        ->count(600)
        ->state(new Sequence(
            fn ($sequence) => [
                'site_id' => Site::all()->random()->id,
                'site_category_page_id' => SiteCategoryPage::all()->random()->id
            ],
        ))
		->create()
		->each(function($page) {
            SitePageVariation::factory([
                "site_page_id" => $page->id,
                "site_variation_id" => 1,
                // "image" => "https://i.imgur.com/YIy8LcQ.png"
            ])->create();
            SitePageVariation::factory([
                "site_page_id" => $page->id,
                "site_variation_id" => 3,
                // "image" => "https://i.imgur.com/mjZn29x.png"
            ])->create();
			
			if(rand(1,2) === 1) {
                SitePageVariation::factory([
                    "site_page_id" => $page->id,
                    "site_variation_id" => 2,
                    // "image" => "https://i.imgur.com/S2z0f5D.png"
                ])->create();
                SitePageVariation::factory([
                    "site_page_id" => $page->id,
                    "site_variation_id" => 4,
                    // "image" => "https://i.imgur.com/tfCAhd0.png"
                ])->create();
			}

		});


    }

}