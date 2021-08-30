@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Banner</div>
                    </div>
                </div>
                <form action="{{ route('banner.update') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title Banner</label>
                            <input type="text" class="form-control" id="title" name="title"
                                required placeholder="Enter Title Banner" value="{{ old('title') ?? ($data ? $data->title : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Title Banner</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                required placeholder="Enter Subtitle Banner" value="{{ old('subtitle') ?? ($data ? $data->subtitle : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Image Banner</label>
                            <input type="file" class="form-control {{$errors->has('image')?'is-invalid':''}}"
                                name="image" id="input-image">
                            @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('image') }}</b></p>
                            </span>
                            @endif
                            <img src="{{asset('uploads/banner/'.$data->image)}}" width="100" height="100" class="mb-2">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="url_button">URL Button</label>
                                    <input type="text" class="form-control" id="url_button" name="url_button" required
                                        placeholder="Enter url_button" value="{{ old('url_button') ?? ($data ? $data->url_button : '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="text_button">text Button</label>
                                    <input type="text" class="form-control" id="text_button" name="text_button" required
                                        placeholder="Enter text_button" value="{{ old('text_button') ?? ($data ? $data->text_button : '') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
