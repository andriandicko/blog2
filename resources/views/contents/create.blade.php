@extends('main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users Create</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                    <div class="alert alert-success mx-3" role="alert">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <form method="post" action="/users">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" id="exampleInputEmail1" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp">
                        @error('email')
                            <div class="invalid-feedback text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" id="exampleInputEmail1" class="form-control @error('name') is-invalid @enderror" aria-describedby="emailHelp">
                        @error('name')
                            <div class="invalid-feedback text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" id="exampleInputPassword1">
                        @error('password')
                            <div class="invalid-feedback text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/users/" class="btn btn-primary">Cancel</a>
                </form>
                </div>
            </div>
        </div>
        
    </div>


</div>
@endsection