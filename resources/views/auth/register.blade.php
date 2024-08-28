@extends('layouts.guest')

@section('title', 'Register | webadmin')

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
                    <h5>Register Account</h5>
                    <p class="text-muted">Get your account now.</p>
                </div>
                <div class="p-2 mt-4">
                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="useremail">Email</label>
                            <div class="position-relative input-custom-icon">
                                <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                                <span class="bx bx-mail-send"></span>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="name">name</label>
                            <div class="position-relative input-custom-icon">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}" required>
                                <span class="bx bx-user"></span>
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                <span class="bx bx-lock-alt"></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                <span class="bx bx-lock-alt"></span>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="form-check py-1">
                            <input type="checkbox" class="form-check-input" id="auth-terms-condition-check" name="terms" required>
                            <label class="form-check-label" for="auth-terms-condition-check">
                                I accept <a href="javascript: void(0);" class="text-body">Terms and Conditions</a>
                            </label>
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                        </div>

                        <div class="mt-4 text-center">
                            <div class="signin-other-title">
                                <h5 class="font-size-14 mb-3 mt-2 title"> Already have an account? </h5>
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <p class="mb-0"> <a href="{{ route('login') }}" class="fw-medium text-primary">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
@endsection
