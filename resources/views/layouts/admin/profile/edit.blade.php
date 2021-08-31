@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Edit Profile</div>
                    </div>
                </div>
                <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Enter name" value="{{ old('name') ?? ($data ? $data->name : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control {{$errors->has('image')?'is-invalid':''}}"
                                name="image" id="input-image">
                            @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('image') }}</b></p>
                            </span>
                            @endif
                            <img src="{{asset('uploads/user/'.$data->image)}}" class="img-fluid mb-2">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email"
                                        name="email" required placeholder="Enter email"
                                        value="{{ old('email') ?? ($data ? $data->email : '') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('email') }}</b></p>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" required
                                        placeholder="************">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('password') }}</b></p>
                                        </span>
                                    @endif
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
