<?php

namespace App\Http\Controllers\Inspiration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ComponentCategory;
use App\Models\Site\SiteComponent;

class ComponentController extends Controller
{

    public function index()
    {
        return view('web.inspiration.components.index', [
            'data' => SiteComponent::latest()->paginate(10)
        ]);
    }

    public function show()
    {   
        // return view('web.inspiration.components.show', )
    }

    // return view('web.inspiration.companies.index', [
    //     'companies' => Company::latest()->filter(
    //         request(['color'])
    //     )->paginate(30)->withQueryString()
    // ]);
    // public function index() 
    // {
    //     return view('web.inspiration.components.index', [
    //         'components' => Component::latest()->paginate(50)
    //     ]);
    // }

    // public function index() 
    // {
    //     return view('web.inspiration.components.index', [
    //         'components' => SiteComponent::latest()->filter(
    //             request(['color'])
    //         )->paginate(50)->withQueryString()
    //     ]);
    // }

    // public function show(ComponentCategory $componentCategory) 
    // {
    //     $components = $componentCategory->components;
        
    //     return view('web.inspiration.components.show', compact('components'));
    // }
}