@extends('layouts.admin.app')
@section('content')
<div class="container-fluid">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex justify-content-between">
					<div class="card-title">Edit Our Product</div>
				</div>
			</div>
			<div class="card-body">
				<form action="{{ route('product.update', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
                    {{method_field('PATCH')}}
					<div class="d-flex justify-content-center">
						<div class="col-md-8">
							<div class="form-group">
								<label for="">Title</label>
								<input type="text" class="form-control {{$errors->has('title')?'is-invalid':''}}" name="title" id="input-title" value="{{ $data->title }}">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('title') }}</b></p>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<label for="">Description</label>
								<textarea id="summernote" class="form-control {{$errors->has('description')?'is-invalid':''}}" name="description" id="input-deskirpsi">{{ $data->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('description') }}</b></p>
                                    </span>
                                @endif
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
                                <img src="{{asset('uploads/products/'.$data->image)}}" class="img-fluid mb-2">
                            </div>
                            <a href="{{ route('product.index') }}" class="btn btn-sm btn-secondary px-2">Back</a>
							<button type="submit" class="btn btn-sm btn-primary px-2">Save</button>
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
