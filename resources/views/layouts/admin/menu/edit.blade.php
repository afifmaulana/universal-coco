@extends('layouts.admin')
@section('content')
<div class="container-fluid">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex justify-content-between">
					<div class="card-title">Edit Menu</div>
				</div>
			</div>
			<div class="card-body">
				<form action="{{ route('menu.update', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
                    {{method_field('PATCH')}}
					<div class="d-flex justify-content-center">
						<div class="col-md-8">
                            <div class="form-group">
								<label for="">Menu Name</label>
								<input type="text" class="form-control {{$errors->has('menu_name')?'is-invalid':''}}" name="menu_name" id="input-menu_name" value="{{ old('menu_name') ?? ($data ? $data->menu_name : '') }}">
                                @if ($errors->has('menu_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('menu_name') }}</b></p>
                                    </span>
                                @endif
							</div>

							<button type="submit" class="btn btn-sm btn-primary">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@include('sweetalert::alert')
@endsection
