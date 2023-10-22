<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SitePageVariation extends Model implements HasMedia
{   
    use HasFactory;
    use InteractsWithMedia;
    
    public function scopeFiltered($query, $theme, $device) {
        $query->select('site_page_variations.*')
            ->join('site_variations', 'site_variation_id', 'site_variations.id')
            ->where('site_variations.theme', $theme)
            ->where('site_variations.device', $device);

        return $query;
    }

    public function variation()
    {
        return $this->belongsTo(SiteVariation::class, 'site_variation_id');
    }

    public function hi()
    {
        return "hi";
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->width(100)
            ->height(100);
    }

}