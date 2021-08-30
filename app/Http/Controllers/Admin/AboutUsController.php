<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {

        $data = AboutUs::get()->first();
        return view('layouts.admin.about-us.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'title' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
			'description' => 'required',
        ];

        $message = [
            'mimes' => 'File image harus .png, .jpg, .jpeg, .gif, .svg',
            'required'  => ':attribute tidak  boleh kosong',
        ];

        $this->validate($request, $rules, $message);

        $aboutus = AboutUs::get()->first();
        $aboutus->title = $request->title;
        $aboutus->description = $request->description;
        $image = $request->file('image');
        if ($image != '') {
            $img = (public_path('uploads/about-us/').$aboutus->image);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/about-us');
            $image->move($path, $filename);
            $aboutus->image = $filename;
        }
        $aboutus->update();
        Alert::success('About Us ' . $aboutus->title, 'Berhasil Diubah');
        return redirect()->back();
    }
}
