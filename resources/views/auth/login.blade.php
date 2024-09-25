@extends('layouts.guest')

@section('title', 'Login | LiveAqar')

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
                    <h5>Welcome Back !</h5>
                    <p class="text-muted">Sign in to continue to Dashboard.</p>
                </div>
                <div class="p-2 mt-4">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <div class="position-relative input-custom-icon">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                                <span class="bx bx-user"></span>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <div class="float-end">
                                <a href="{{ route('auth.forgot-password') }}" class="text-muted text-decoration-underline">Forgot password?</a>
                            </div>
                            <label class="form-label" for="password-input">Password</label>
                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                <span class="bx bx-lock-alt"></span>
                                <input type="password" class="form-control" id="password-input" name="password" placeholder="Enter password" required>
                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-toggle">
                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="form-check py-1">
                            <input type="checkbox" class="form-check-input" id="auth-remember-check" name="remember">
                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                        </div>

                        <div class="mt-4 text-center">
                            <h5 class="font-size-14 mb-3 mt-2 title">Don't have an account?</h5>
                        </div>

                        <div class="mt-4 text-center">
                            <p class="mb-0"><a href="{{ route('register') }}" class="fw-medium text-primary">Signup now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
@endsection

@section('scripts')
<script>
document.getElementById('password-toggle').onclick = function() {
    var passwordInput = document.getElementById('password-input');
    var passwordIcon = document.getElementById('password-toggle').querySelector('.mdi');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordIcon.classList.add('mdi-eye-off');
        passwordIcon.classList.remove('mdi-eye-outline');
    } else {
        passwordInput.type = 'password';
        passwordIcon.classList.add('mdi-eye-outline');
        passwordIcon.classList.remove('mdi-eye-off');
    }
};
</script>
@endsection
