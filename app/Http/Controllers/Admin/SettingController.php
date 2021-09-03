<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {

        $data = Setting::get()->first();
        return view('layouts.admin.setting.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        // $rules = [
        //     'title_website' => 'required',
        //     'favicon' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		// 	'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		// 	'keywords' => 'required',
		// 	'facebook' => 'required',
		// 	'whatsapp' => 'required',
		// 	'instagram' => 'required',
		// 	'youtube' => 'required',
        // ];

        // $message = [
        //     'mimes' => 'File image harus .png, .jpg, .jpeg, .gif, .svg',
        //     'required'  => ':attribute tidak  boleh kosong',
        // ];

        // $this->validate($request, $rules, $message);

        $setting = Setting::get()->first();
        $setting->title_website = $request->title_website;
        $setting->keywords = $request->keywords;
        $setting->description = $request->description;
        $setting->facebook = $request->facebook;
        $setting->linkedin = $request->linkedin;
        $setting->instagram = $request->instagram;
        $favicon = $request->file('favicon');
        if ($favicon != '') {
            $img = (public_path('uploads/setting/').$setting->favicon);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$favicon->getClientOriginalExtension();
            $path = public_path('uploads/setting');
            $favicon->move($path, $filename);
            $setting->favicon = $filename;
        }
        $logo = $request->file('logo');
        if ($logo != '') {
            $img = (public_path('uploads/setting/').$setting->logo);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$logo->getClientOriginalExtension();
            $path = public_path('uploads/setting');
            $logo->move($path, $filename);
            $setting->logo = $filename;
        }
        $setting->update();
        Artisan::call('cache:clear');
        Alert::success('Data ' . $setting->title_website, 'Berhasil Diubah');
        return redirect()->back();
    }
}
