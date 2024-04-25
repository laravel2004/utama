<?php

namespace App\Http\Controllers\PageView;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function about()
    {
        return view('pages.about.index');
    }

    public function service()
    {
        $products = Product::paginate(12);
        return view('pages.services.index', compact('products'));
    }

    public function contact()
    {
        return view('pages.contact.index');
    }
}
