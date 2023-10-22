<?php

namespace App\Http\Controllers\Inspiration\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller; 
use App\Models\Site\Site;


class SitePageController extends Controller
{
    public function index(Site $site)
    {
        return view('web.inspiration.sites.pages.index', [
            'site' => $site,
            'pages' => $site->pages()->latest()->paginate(50)
        ]);
    }
}
