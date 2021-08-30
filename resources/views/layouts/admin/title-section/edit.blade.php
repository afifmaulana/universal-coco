@extends('layouts.admin')
@section('content')
<div class="container-fluid">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex justify-content-between">
					<div class="card-title">Edit Title Section</div>
				</div>
			</div>
			<div class="card-body">
				<form action="{{ route('title-section.update', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
                    {{method_field('PATCH')}}
					<div class="d-flex justify-content-center">
						<div class="col-md-8">
                            <div class="form-group">
								<label for="">Section Title</label>
								<input type="text" class="form-control {{$errors->has('section_title')?'is-invalid':''}}" name="section_title" id="input-section_title" value="{{ old('section_title') ?? ($data ? $data->section_title : '') }}">
                                @if ($errors->has('section_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('section_title') }}</b></p>
                                    </span>
                                @endif
							</div>
                            <div class="form-group">
								<label for="">Section Name</label>
								<select name="section_name" id="" class="form-control {{$errors->has('categor_brand')?'is-invalid':''}}">
                                    <option value="" selected disabled> ---- Choose Section Name -----</option>
                                    <option value="About Us" {{ $data->section_name == 'About Us' ? 'selected' : '' }}> About Us </option>
                                    <option value="Feature" {{ $data->section_name == 'Feature' ? 'selected' : '' }}> Feature </option>
                                    <option value="Our Product" {{ $data->section_name == 'Our Product' ? 'selected' : '' }}> Our Product </option>
                                    <option value="Our Team" {{ $data->section_name == 'Our Team' ? 'selected' : '' }}> Our Team </option>
                                </select>
                                @if ($errors->has('section_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('section_name') }}</b></p>
                                    </span>
                                @endif
							</div>

							<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@include('sweetalert::alert')
@endsection
