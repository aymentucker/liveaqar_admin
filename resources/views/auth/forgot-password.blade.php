@extends('layouts.guest')

@section('title', 'Reset Password | LiveAqar')

@section('content')
<div class="row justify-content-center my-auto">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="mb-4 pb-2">
            <a href="{{ url('/') }}" class="d-block auth-logo">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="30" class="auth-logo-dark me-start">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="30" class="auth-logo-light me-start">
            </a>
        </div>
        <div class="card">
            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5>Forgot Your Password?</h5>
                    <p class="text-muted">No problem. Just let us know your email address, and we will send you a password reset link that will allow you to choose a new one.</p>
                </div>
                <div class="p-2 mt-4">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Password Reset Request Form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <div class="position-relative input-custom-icon">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
                                <span class="bx bx-envelope"></span>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Email Password Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
@endsection
