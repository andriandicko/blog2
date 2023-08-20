@extends('main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div >
        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between">{{ $title }}</h1>
        <a href="/users/create" class="btn btn-sm btn-secondary ml-3 mb-3">Add Data</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
            <div class="table-responsive p-0">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                                                
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</td>
                            <td class="text-center">
                                {{-- <a href="/users/{{ $user->id }}/edit" class="text-secondary font-weight-bold">Edit</a> --}}
                                <a href="/users/{{ $user->id }}/edit" class="btn btn-primary btn-sm font-weight-bold">Edit</a>
                                |
                                <a href="/users/{{ $user->id }}/show" class="btn btn-info btn-sm font-weight-bold">Detail</a>
                                |
                                <a href="/users/{{ $user->id }}/delete" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Tanggal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                                                
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection