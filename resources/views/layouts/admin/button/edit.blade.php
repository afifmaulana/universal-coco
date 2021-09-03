@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Button on Our Product</div>
                    </div>
                </div>
                <form action="{{ route('button-our-product.update') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="text_button_detail">Text Button Detail</label>
                            <input type="text" class="form-control" id="text_button_detail" name="text_button_detail"
                                required placeholder="Enter Text Button Detail" value="{{ old('text_button_detail') ?? ($data ? $data->text_button_detail : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="text_button_wa">Text Button WhatsApp</label>
                            <input rows="5" type="text" class="form-control" id="text_button_wa" name="text_button_wa"
                                required placeholder="Enter Text Button WA" value="{{ old('text_button_wa') ?? ($data ? $data->text_button_wa : '') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="url_button_wa">URL Button WhatsApp</label>
                            <input rows="5" type="text" class="form-control" id="url_button_wa" name="url_button_wa"
                                required placeholder="Enter URL Button WA" value="{{ old('url_button_wa') ?? ($data ? $data->url_button_wa : '') }}"/>
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
