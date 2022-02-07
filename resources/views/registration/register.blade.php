@extends('admin.layout')


@section('content')
<!-- Registration Form -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card shadow">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Register</h2>
                </div>
                <div class="card-body">
                    <form  method="POST" action="/register" class="mt-10">
                        @csrf
                        <div class="mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required />
                            @error('username')
                            <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required />
                            @error('email')
                            <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required  name="password"/>
                            @error('password')
                            <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning main-bg">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
