<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {

        $data = Footer::get()->first();
        return view('layouts.admin.footer.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {

        $footer = Footer::get()->first();
        $footer->title = $request->title;
        $footer->subtitle = $request->subtitle;
        $footer->company_name = $request->company_name;
        $footer->description = $request->description;
        $image = $request->file('image');
        if ($image != '') {
            $img = (public_path('uploads/footer/').$footer->image);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/footer');
            $image->move($path, $filename);
            $footer->image = $filename;
        }
        $footer->update();
        Alert::success('Data ' . $footer->title_website, 'Berhasil Diubah');
        return redirect()->back();
    }
}
