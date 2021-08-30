<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {

        $data = User::get()->first();
        return view('layouts.admin.profile.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg,ico|max:2048',
			'email' => 'required',
			'password' => 'required',
        ];

        $message = [
            'mimes' => 'File image harus .png, .jpg, .jpeg, .gif, .svg, .ico',
            'required'  => ':attribute tidak  boleh kosong',
        ];

        $this->validate($request, $rules, $message);

        $user = User::get()->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $image = $request->file('image');
        if ($image != '') {
            $img = (public_path('uploads/user/').$user->image);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/user');
            $image->move($path, $filename);
            $user->image = $filename;
        }
        $user->update();
        Alert::success('Profile ' . $user->name, 'Berhasil Diubah');
        return redirect()->back();
    }
}
