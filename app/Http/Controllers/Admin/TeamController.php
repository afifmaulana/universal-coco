<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Models\Team;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datas = Team::orderBy('id', 'DESC')->paginate(10);
        return view('layouts.admin.team.index', compact('datas'));
    }

    public function create()
    {
        return view('layouts.admin.team.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'position' => 'required',
            'caption' => 'required',
            'image' => 'required|file|image|mimes:png,jpg,jpeg,svg|max:2048',
            'linkedin' => 'required',
            'instagram' => 'required',
        ];

        $message = [
            'required|file|image|mimes:jpg,png,jpeg,svg|max:2048' => ':attribute tidak boleh kosong',
            'mimes' => 'File image harus .png, .jpg, .jpeg, .svg',
            'required'  => ':attribute tidak  boleh kosong',
        ];

        $this->validate($request, $rules, $message);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/teams');
        $image->move($path, $filename);

        $team = new team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->caption = $request->caption;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $team->image = $filename;
        $team->save();
        Alert::success('Team Berhasil Ditambahkan');
        return redirect()->route('team.index');
    }

    public function edit($id)
    {
        $data = Team::where('id', $id)->first();
        return view('layouts.admin.team.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'position' => 'required',
            'caption' => 'required',
            'image' => 'file|image|mimes:png,jpg,jpeg,svg|max:2048',
            'linkedin' => 'required',
            'instagram' => 'required',
        ];

        $message = [
            'mimes' => 'File image harus .png, .jpg, .jpeg, .svg',
            'required'  => ':attribute tidak  boleh kosong',
        ];

        $this->validate($request, $rules, $message);

        $team = Team::where('id', $id)->first();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->caption = $request->caption;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $image = $request->file('image');
        if ($image != '') {
            $img = (public_path('uploads/teams/').$team->image);
            if(File::exists($img)) {
                File::delete($img);
            }
            $filename =time().'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/teams');
            $image->move($path, $filename);
            $team->image = $filename;
        }
        $team->update();
        Artisan::call('cache:clear');
        Alert::success('Data ' . $team->name, 'Berhasil Diubah');
        return redirect()->route('team.index');
    }

    public function delete($id)
    {
        $data = Team::where('id', $id)->first();
        $data->delete();
        Alert::success('Data ' . $data->name, 'Berhasil Dihapus');
        return redirect()->route('team.index');
    }
}
