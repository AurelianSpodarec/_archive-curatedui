<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Site\SitePage;
use App\Models\Site\SiteComponent;
use App\Models\Site\SiteOGImage;

class Site extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'logo',
        'name',
        'slug',
    ];

    public function color()
    {
        return $this->belongsto(SiteBrandColor::class, 'site_brand_color_id');
    }

    public function pages() {
        return $this->hasMany(SitePage::class);
    }

    public function components() {
        return $this->hasMany(SiteComponent::class);
    }

    public function ogimages() {
        return $this->hasMany(SiteOGImage::class);
    }    

    public function category() {
        return $this->belongsTo(SiteCategoryType::class, 'site_category_type_id');
    }

    public function industry() {
        return $this->belongsTo(SiteCategoryIndustry::class, 'site_category_industry_id');
    }
}

 

// use App\Models\WebsitePage;

// class Company extends Model
// {
//     use HasFactory;



//     public function scopeFilter($query, array $filters) {

//         $query->when($filters['color'] ?? false, fn($query, $color) =>
//         $query->whereHas('color', fn ($query) =>
//                 $query->where('name', $color)
//             )
//         );

//         // Device: `is_mobile`
//         // $query->when($filters['is_mobile'] ?? false, fn($query, $is_mobile) =>
//         // $query->whereHas('is_mobile', fn ($query) =>
//         //         $query->where('name', $is_mobile)
//         //     )
//         // );

//         // Show all desktop: get all pages whos `pages_content` `is_mobile` set to false

//         // Add industry, mobile/desktop, dark/light mode

//     }


// }
