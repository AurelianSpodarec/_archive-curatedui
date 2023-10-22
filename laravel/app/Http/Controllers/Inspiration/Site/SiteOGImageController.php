<?php

namespace App\Http\Controllers\Inspiration\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Site\Site;

class SiteOGImageController extends Controller
{
    public function index(Site $site)
    {
        return view('web.inspiration.sites.ogimages.index', [
            'site' => $site
            // 'components' => Component::latest()->paginate(30),
        ]);
    }
}
