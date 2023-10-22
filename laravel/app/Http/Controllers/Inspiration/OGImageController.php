<?php

namespace App\Http\Controllers\Inspiration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Site\SiteOGImage;

class OGImageController extends Controller
{
    public function index()
    {
        return view('web.inspiration.og-images.index', [
            'data' => SiteOGImage::latest()->paginate(10)
        ]);
    }

    // public function show()
    // {
    //     return view('web.inspiration.og-images.show', [
            
    //     ]);
    // }
}