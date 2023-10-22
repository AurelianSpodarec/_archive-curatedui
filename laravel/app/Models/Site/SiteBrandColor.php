<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Site\Site;

class SiteBrandColor extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->hasOne(Site::class);
    }
}
