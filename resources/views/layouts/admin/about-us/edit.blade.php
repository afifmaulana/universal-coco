@extends('layouts.admin.app')
@section('content')
@include('sweetalert::alert')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Edit About Us</div>
                    </div>
                </div>
                <form action="{{ route('about-us.update') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required
                                placeholder="Enter title" value="{{ old('title') ?? ($data ? $data->title : '') }}">
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
                            <img src="{{asset('uploads/about-us/'.$data->image)}}" height="100" width="100" class="img-fluid mb-2">
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

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
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
