<?php

namespace App\Http\Controllers\Inspiration\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Site\Site;
use App\Models\Site\SiteComponent;

class SiteComponentController extends Controller
{
    public function index(Site $site)
    {
        // $siteDetails = $site
        // use compact to have components and siteDetails

        return view('web.inspiration.sites.components.index', [
            'site' => $site,
            'components' => $site->components()->latest()->paginate(50)
        ]);
    }

    public function show()
    {
         
    }
}
// public function index(Site $site)
// {
//     return view('web.inspiration.sites.pages.index', [
//         'site' => $site,
//         'pages' => $site->pages()->latest()->paginate(50)
//     ]);
// }