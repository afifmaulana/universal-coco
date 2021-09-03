<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\ButtonOurProduct;
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
        $features = Feature::all();
        $products = Product::all();
        $teams = Team::all();
        $button = ButtonOurProduct::first();

        $titleAboutUs = TitleSection::where('section_name', 'About Us')->get();
        $titleFeature = TitleSection::where('section_name', 'Feature')->get();
        $titleOurProduct = TitleSection::where('section_name', 'Our Product')->get();
        $titleOurTeam = TitleSection::where('section_name', 'Our Teams')->get();

        return view('layouts.frontend.app', [
            'banner' => $banner,
            'aboutus' => $aboutus,
            'features' => $features,
            'products' => $products,
            'teams' => $teams,
            'button' => $button,
            'titleAboutUs' => $titleAboutUs,
            'titleFeature' => $titleFeature,
            'titleOurProduct' => $titleOurProduct,
            'titleOurTeam' => $titleOurTeam,
        ]);
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('layouts.frontend.detail-product', [
            'product' => $product,
        ]);
    }
}
