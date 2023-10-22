<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteVariation extends Model
{
    use HasFactory;

    public function scopeFiltered($query, $theme, $device) {
        $query->whereIn('site_variation_id', function($query) use ($theme, $device) {
            $query->select('id')
                ->from('site_variations')
                ->where('theme', $theme)
                ->where('device', $device);
        });
    
        dd($query);
        return $query;
    }
}
