<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ButtonOurProduct;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ButtonOurProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {

        $data = ButtonOurProduct::get()->first();
        return view('layouts.admin.button.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {

        $button = ButtonOurProduct::get()->first();
        $button->text_button_detail = $request->text_button_detail;
        $button->text_button_wa = $request->text_button_wa;
        $button->url_button_wa = $request->url_button_wa;

        $button->update();
        Alert::success('Data Berhasil Diubah');
        return redirect()->back();
    }
}
