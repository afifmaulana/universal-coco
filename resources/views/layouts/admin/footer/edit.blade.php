@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Footer</div>
                    </div>
                </div>
                <form action="{{ route('footer.update') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title Section Footer</label>
                            <input type="text" class="form-control" id="title" name="title"
                                required placeholder="Enter Title Website" value="{{ old('title') ?? ($data ? $data->title : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle</label>
                            <input rows="5" type="text" class="form-control" id="subtitle" name="subtitle"
                                required placeholder="Enter subtitle" value="{{ old('subtitle') ?? ($data ? $data->subtitle : '') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input rows="5" type="text" class="form-control" id="company_name" name="company_name"
                                required placeholder="Enter company_name" value="{{ old('company_name') ?? ($data ? $data->company_name : '') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="5" type="text" class="form-control" id="description" name="description"
                                required placeholder="Enter Description">
                                {{ old('description') ?? ($data ? $data->description : '') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file" class="form-control {{$errors->has('image')?'is-invalid':''}}"
                                name="image" id="input-image">
                            @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('image') }}</b></p>
                            </span>
                            @endif
                            <img src="{{asset('uploads/footer/'.$data->image)}}" width="100" height="100" class="mb-2">
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
