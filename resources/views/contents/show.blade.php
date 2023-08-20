@extends('main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users Detail</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                    <div class="alert alert-success pb-3" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/random/300x300" class="card-img-top" >
                        <div class="card-body">
                          <h5 class="card-title">{{ $user->name }}</h5>
                          <p class="card-text">{{ $user->email }}<p>
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
                            <a href="/users/" class="btn btn-primary">Cancel</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        
    </div>


</div>
@endsection