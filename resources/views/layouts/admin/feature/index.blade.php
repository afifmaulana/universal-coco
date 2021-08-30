@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Features List</div>
                        <a href="{{ route('feature.create') }}"
                            class="btn btn-primary btn-sm btn-add">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover main-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="width: 300px">{{ $data->title }}</td>
                                    <td style="width: 300px">{!! $data->description !!}</td>
                                    <td>
                                        <a href="{{ asset('uploads/features/' . $data->image) }}" data-toggle="lightbox">
                                            <img src="{{ asset('uploads/features/' . $data->image) }}" height="70"
                                                width="70">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('feature.edit', $data->id) }}"
                                            class="btn btn-xs btn-outline-warning"><i class="la la-edit"></i> | Edit</a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-danger modal-delete"
                                            data-id={{ $data->id }} data-toggle="modal" data-target="#deleteModal">
                                            <i class="la la-trash"></i>
                                            | Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i style="color: #ffd105" class="la la-question-circle la-5x"></i>
                    </div>
                    <h5 class="text-center p-4">Apakah Anda yakin ingin menghapus data ini?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                    <a id="deleteButton" type="submit" href="" class="btn btn-sm btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.modal-delete', function() {
            let id = $(this).attr('data-id');
            $('#deleteButton').attr("href", '{{ route('feature.delete', '') }}' + "/" + id)
        });
    </script>
@endpush
