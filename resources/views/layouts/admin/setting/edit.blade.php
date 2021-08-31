@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Settings</div>
                    </div>
                </div>
                <form action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title Website</label>
                            <input type="text" class="form-control" id="title_website" name="title_website"
                                required placeholder="Enter Title Website" value="{{ old('title_website') ?? ($data ? $data->title_website : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="keywords">Keywords Website</label>
                            <textarea rows="5" type="text" class="form-control" id="keywords" name="keywords"
                                required placeholder="Enter keywords Website">
                                {{ old('keywords') ?? ($data ? $data->keywords : '') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Description Website</label>
                            <textarea rows="5" type="text" class="form-control" id="description" name="description"
                                required placeholder="Enter Description Website">
                                {{ old('description') ?? ($data ? $data->description : '') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Favicon</label>
                            <input type="file" class="form-control {{$errors->has('favicon')?'is-invalid':''}}"
                                name="favicon" id="input-favicon">
                            @if ($errors->has('favicon'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('favicon') }}</b></p>
                            </span>
                            @endif
                            <img src="{{asset('uploads/setting/'.$data->favicon)}}" width="100" height="100" class="mb-2">
                        </div>
                        <div class="form-group">
                            <label for="">Logo</label>
                            <input type="file" class="form-control {{$errors->has('logo')?'is-invalid':''}}"
                                name="logo" id="input-logo">
                            @if ($errors->has('logo'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('logo') }}</b></p>
                            </span>
                            @endif
                            <img src="{{asset('uploads/setting/'.$data->logo)}}" class="img-fluid mb-2">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" required
                                        placeholder="Enter facebook" value="{{ old('facebook') ?? ($data ? $data->facebook : '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram" required
                                        placeholder="Enter instagram" value="{{ old('instagram') ?? ($data ? $data->instagram : '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="linkedin">Linked In</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin"
                                        required placeholder="Enter Linked In" value="{{ old('linkedin') ?? ($data ? $data->linkedin : '') }}">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
