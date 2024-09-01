@extends('layouts.app')

@section('title', 'Application Settings')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Application Settings</h5>

                    <form action="{{ route('settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <h6>Contact Information</h6>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone', $settings['phone'] ?? '') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter email address" value="{{ old('email', $settings['email'] ?? '') }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea id="address" name="address" class="form-control" placeholder="Enter physical address" rows="3" required>{{ old('address', $settings['address'] ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Add more sections as needed for other settings -->
                        <div class="mb-4">
                            <h6>Web/App Settings</h6>
                            <!-- Example of other settings -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="app_name" class="form-label">App Name</label>
                                    <input type="text" id="app_name" name="app_name" class="form-control" placeholder="Enter app name" value="{{ old('app_name', $settings['app_name'] ?? '') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="web_url" class="form-label">Website URL</label>
                                    <input type="url" id="web_url" name="web_url" class="form-control" placeholder="Enter website URL" value="{{ old('web_url', $settings['web_url'] ?? '') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success"><i class="bx bx-check me-1"></i> Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
