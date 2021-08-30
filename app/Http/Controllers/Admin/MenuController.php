<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
        $datas = Menu::all();
		return view('layouts.admin.menu.index', compact('datas'));
	}

    public function edit($id)
    {
        $data = Menu::where('id', $id)->first();
        return view('layouts.admin.menu.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $rules= [
            'menu_name' => 'required',
         ];

         $message = [
            'required'  => ':attribute tidak  boleh kosong',
         ];

         $this->validate($request, $rules, $message);

         $menu = Menu::where('id', $id)->first();
         $menu->menu_name = $request->menu_name;

         $menu->update();
         Alert::success('Data '.$menu->title, 'Berhasil Diubah');
         return redirect()->route('menu.index');

    }

}

