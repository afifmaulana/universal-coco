
@extends('layouts.admin.app')
@section('content')
<div class="container-fluid">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex justify-content-between">
					<div class="card-title">Add New Team</div>
				</div>
			</div>
			<div class="card-body">
				<form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="d-flex justify-content-center">
						<div class="col-md-8">
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" id="input-name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('name') }}</b></p>
                                    </span>
                                @endif
							</div>
                            <div class="form-group">
								<label for="">Position</label>
								<input type="text" class="form-control {{$errors->has('position')?'is-invalid':''}}" name="position" id="input-position">
                                @if ($errors->has('position'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('position') }}</b></p>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<label for="">Caption</label>
								<textarea id="summernote" class="form-control {{$errors->has('caption')?'is-invalid':''}}" name="caption" id="input-deskirpsi"></textarea>
                                @if ($errors->has('caption'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('caption') }}</b></p>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<label for="">Image</label>
								<input type="file" class="form-control {{$errors->has('image')?'is-invalid':''}}" name="image" id="input-image">
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('image') }}</b></p>
                                    </span>
                                @endif
							</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Linked In</label>
                                        <input type="text" class="form-control {{$errors->has('linkedin')?'is-invalid':''}}" name="linkedin" id="input-linkedin">
                                        @if ($errors->has('linkedin'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('linkedin') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Instagram</label>
                                        <input type="text" class="form-control {{$errors->has('instagram')?'is-invalid':''}}" name="instagram" id="input-instagram">
                                        @if ($errors->has('instagram'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('instagram') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('team.index') }}" class="btn btn-sm btn-secondary px-2">Back</a>
							<button type="submit" class="btn btn-sm btn-primary">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
                fontNames: ['Arial', 'Arial Black', 'Nunito', 'Courier New'],
                fontNamesIgnoreCheck: ['Nutino'],
                popover: {
                    image: [
                        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    table: [
                        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                        ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                },
                callbacks: {
                    onImageUpload: async function(files, editor, welEditable) {
                        const base64 = await fileToBase64(files[0])
                        uploadImage(base64)

                    }
                }
            });
        })

    </script>

@endpush
