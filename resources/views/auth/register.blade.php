@extends('mainLayout')
@section('page-title', 'Account Registration')
@section('auth-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center font-weight-light">Create Your Account</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label class="small mb-1" for="name">Username</label>
                            <input class="form-control py-4" id="name" type="text" name="name" value="{{ old('username') }}" required />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="email">Email</label>
                            <input class="form-control py-4" id="email" type="email" name="email" required />
                            <input type="checkbox" name="generate_email" class="ml-2"> Generate
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="password">Password</label>
                            <input class="form-control py-4" id="password" type="password" name="password" required />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="confirm_password">Confirm Password</label>
                            <input class="form-control py-4" id="confirm_password" type="password" name="password_confirmation" required />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-primary btn-block py-3 px-4 rounded">Register</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="{{ route('login') }}">Already have an account? Login here</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
