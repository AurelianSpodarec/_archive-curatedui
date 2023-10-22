<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Site\Site;

class SitePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    protected $with = ['color', 'site', 'categoryPage'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['color'] ?? false, fn($query, $color) =>
            $query->whereHas('site.color', function ($query) use ($color) {
                $query->where('name', $color);
            })
        );
    
        $theme = $filters['theme'] ?? 'light';
        $device = $filters['device'] ?? 'desktop';
    
        $query->with(['imageVariations' => function($query) use ($theme, $device) {
                $query->filtered($theme, $device);
            }
        ]);

        return $query;
    }

    public function imageVariations()
    {
        return $this->hasMany(SitePageVariation::class, 'site_page_id');
    }

    public function allImages()
    {
        return $this->hasMany(SitePageVariation::class, 'site_page_id');
    }

    public function color()
    {
        return $this->belongsTo(SiteBrandColor::class,'site_brand_color_id');
    }

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function categoryPage()
    {
        return $this->belongsTo(SiteCategoryPage::class, 'site_category_page_id');
    }
}