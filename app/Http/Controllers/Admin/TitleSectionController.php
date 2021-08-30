<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TitleSection;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TitleSectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
        $datas = TitleSection::all();
		return view('layouts.admin.title-section.index', compact('datas'));
	}

    public function edit($id)
    {
        $data = TitleSection::where('id', $id)->first();
        return view('layouts.admin.title-section.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $rules= [
            'section_title' => 'required',
            'section_name' => 'required',
         ];

         $message = [
            'required'  => ':attribute tidak  boleh kosong',
         ];

         $this->validate($request, $rules, $message);

         $titleSection = TitleSection::where('id', $id)->first();
         $titleSection->section_title = $request->section_title;
         $titleSection->section_name = $request->section_name;

         $titleSection->update();
         Alert::success('Data '.$titleSection->title, 'Berhasil Diubah');
         return redirect()->route('title-section.index');

    }

}
