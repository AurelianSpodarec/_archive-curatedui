<?php

namespace App\Http\Controllers\Inspiration;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Site\SiteCategoryPage;
use App\Models\Site\SitePage;

class PageController extends Controller
{
    public function index($category = null)
    {
        // $data = SitePage::latest()->filter(
        //     request(['color', 'device', 'theme'])
        // )->when($category, function ($query, $category) {
        //     $query->where('name', $category);
        // })
        // ->paginate(10)
        // ->withQueryString();

        $data = SitePage::latest()->filter(
            request(['color', 'device', 'theme'])
        )->when($category, function ($query, $category) {
            $query->whereHas('categoryPage', function ($query) use ($category) {
                $query->where('name', $category);
            });
        })
        ->paginate(10)
        ->withQueryString();

        return view('web.inspiration.pages.index', compact('data'));
    }
}