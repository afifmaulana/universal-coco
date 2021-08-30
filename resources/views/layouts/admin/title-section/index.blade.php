@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-title">Title Section List</div>
               
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover main-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Section Title</th>
                                <th scope="col">Section Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="width: 300px">{{ $data->section_title }}</td>
                                    <td style="width: 300px">{!! $data->section_name !!}</td>
                                    <td>
                                        <a href="{{ route('title-section.edit', $data->id) }}"
                                            class="btn btn-xs btn-outline-warning"><i class="la la-edit"></i> | Edit</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection

