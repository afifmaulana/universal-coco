<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {

        $data = Banner::get()->first();
        return view('layouts.admin.banner.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'title' => 'required',
            'subtitle' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
			'url_button' => 'required',
			'text_button' => 'required',
        ];

        $message = [
            'mimes' => 'File image harus .png, .jpg, .jpeg, .gif, .svg',
            'required'  => ':attribute tidak  boleh kosong',
        ];

        $this->validate($request, $rules, $message);

        $banner = Banner::get()->first();
        $banner->title = $request->title;
        $banner->subtitle = $request->subtitle;
        $banner->url_button = $request->url_button;
        $banner->text_button = $request->text_button;
        $image = $request->file('image');
        if ($image != '') {
            $img = (public_path('images/').$banner->image);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename = 'bg-hero.png';
            $path = public_path('images');
            $image->move($path, $filename);
            $banner->image = $filename;
        }
        $banner->update();
        Alert::success('Banner ' . $banner->title, 'Berhasil Diubah');
        return redirect()->back();
    }
}
