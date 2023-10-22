<?php

namespace App\Http\Controllers\Inspiration\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Site\Site;


class SiteController extends Controller
{
    public function index(Site $sites)
    {
        return view('web.inspiration.sites.index', [
            'data' => Site::latest()->paginate(30)
        ]);
        // return view('web.inspiration.sites.index', [
        //     'sites' => Site::latest()->filter(
        //         request(['color'])
        //     )->paginate(30)->withQueryString()
        // ]);
    }

    public function show(Site $site)
    {
        return view('web.inspiration.sites.show', [
            'site' => $site
        ]);
    }
}
