<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Models\Feature;
use Illuminate\Support\Facades\File;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datas = Feature::orderBy('id', 'DESC')->paginate(10);
        return view('layouts.admin.feature.index', compact('datas'));
    }

    public function create()
    {
        return view('layouts.admin.feature.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|file|image|mimes:png,jpg,jpeg,svg|max:2048',
        ];

        $message = [
            'required|file|image|mimes:jpg,png,jpeg,svg|max:2048' => ':attribute tidak boleh kosong',
            'mimes' => 'File image harus .png, .jpg, .jpeg, .svg',
            'required'  => ':attribute tidak  boleh kosong',
        ];

        $this->validate($request, $rules, $message);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/features');
        $image->move($path, $filename);

        $feature = new Feature();
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->image = $filename;
        $feature->save();
        Alert::success('Data Feature Berhasil Ditambahkan');
        return redirect()->route('feature.index');
    }

    public function edit($id)
    {
        $data = Feature::where('id', $id)->first();
        return view('layouts.admin.feature.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'file|image|mimes:png,jpg,jpeg,svg|max:2048',
        ];

        $message = [
            'mimes' => 'File image harus .png, .jpg, .jpeg, .svg',
            'required'  => ':attribute tidak  boleh kosong',
        ];

        $this->validate($request, $rules, $message);

        $feature = Feature::where('id', $id)->first();
        $feature->title = $request->title;
        $feature->description = $request->description;
        $image = $request->file('image');
        if ($image != '') {
            $img = (public_path('uploads/features/').$feature->image);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/features');
            $image->move($path, $filename);
            $feature->image = $filename;
        }
        $feature->update();
        Alert::success('Data ' . $feature->title, 'Berhasil Diubah');
        return redirect()->route('feature.index');
    }

    public function delete($id)
    {
        $data = Feature::where('id', $id)->first();
        $data->delete();
        Alert::success('Data ' . $data->title, 'Berhasil Dihapus');
        return redirect()->route('feature.index');
    }
}
