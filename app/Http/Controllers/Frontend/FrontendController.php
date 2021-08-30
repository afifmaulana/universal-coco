<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Team;
use App\Models\TitleSection;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $aboutus = AboutUs::first();
        $features = Feature::first();
        $products = Product::all();
        $teams = Team::all();

        $titlesection = TitleSection::all();

        return view('layouts.frontend.app', [
            'banner' => $banner,
            'aboutus' => $aboutus,
            'features' => $features,
            'products' => $products,
            'teams' => $teams,
            'titlesection' => $titlesection,
        ]);
    }
}
