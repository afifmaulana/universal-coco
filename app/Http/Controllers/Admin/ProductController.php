<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datas = Product::orderBy('id', 'DESC')->paginate(10);
        return view('layouts.admin.product.index', compact('datas'));
    }

    public function create()
    {
        return view('layouts.admin.product.create');
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
        $path = public_path('uploads/products');
        $image->move($path, $filename);

        $product = new product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->image = $filename;
        $product->save();
        Alert::success('Data Choose Us', 'Berhasil Ditambahkan');
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $data = Product::where('id', $id)->first();
        return view('layouts.admin.product.edit', compact('data'));
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

        $product = Product::where('id', $id)->first();
        $product->title = $request->title;
        $product->description = $request->description;
        $image = $request->file('image');
        if ($image != '') {
            $img = (public_path('uploads/products/').$product->image);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/products');
            $image->move($path, $filename);
            $product->image = $filename;
        }
        $product->update();
        Alert::success('Data ' . $product->title, 'Berhasil Diubah');
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        $data = Product::where('id', $id)->first();
        $data->delete();
        Alert::success('Data ' . $data->title, 'Berhasil Dihapus');
        return redirect()->route('products.index');
    }
}

