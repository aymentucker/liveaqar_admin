@extends('layouts.app')

@section('title', 'Agencies List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Agencies List <span class="text-muted fw-normal ms-2">({{ $agencies->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".agency-modal" class="btn btn-primary" onclick="openModal()">
                    <i class="bx bx-plus me-1"></i> Add New
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="ps-4" style="width: 50px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="agencycheck">
                                            <label class="form-check-label" for="agencycheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">WhatsApp</th>
                                    <th scope="col">Address</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agencies as $agency)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="agencycheck{{ $agency->id }}">
                                                <label class="form-check-label" for="agencycheck{{ $agency->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $agency->id }}</td>
                                        <td><img src="{{ Storage::url($agency->logo) }}" alt="Agency Logo" width="100">                                        </td>
                                        <td>{{ $agency->name_en }}</td>
                                        <td>{{ $agency->email ?? 'N/A' }}</td>
                                        <td>{{ $agency->phone_number ?? 'N/A' }}</td>
                                        <td>{{ $agency->whatsapp ?? 'N/A' }}</td>
                                        <td>{{ $agency->address ?? 'N/A' }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $agency }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('agencies.destroy', $agency->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="px-2 text-danger" style="background: none; border: none;">
                                                            <i class="bx bx-trash-alt font-size-18"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding/Editing Agency -->
    <form id="agency-form" action="{{ route('agencies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade agency-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New Agency</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-name">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" id="agency-name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-name-en">Name (English)</label>
                                    <input type="text" class="form-control" placeholder="Enter Name in English" id="agency-name-en" name="name_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="agency-email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-phone-number">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number" id="agency-phone-number" name="phone_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-whatsapp">WhatsApp</label>
                                    <input type="text" class="form-control" placeholder="Enter WhatsApp Number" id="agency-whatsapp" name="whatsapp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-license">License</label>
                                    <input type="text" class="form-control" placeholder="Enter License Number" id="agency-license" name="license">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-address">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address" id="agency-address" name="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-website-url">Website URL</label>
                                    <input type="url" class="form-control" placeholder="Enter Website URL" id="agency-website-url" name="website_url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-description">Description</label>
                                    <textarea class="form-control" id="agency-description" name="description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-description-en">Description (English)</label>
                                    <textarea class="form-control" id="agency-description-en" name="description_en" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-social-media">Social Media</label>
                                    <textarea class="form-control" id="agency-social-media" name="social_media" rows="3" placeholder='{"facebook": "url", "twitter": "url"}'></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="agency-logo">Logo</label>
                                    <input type="file" class="form-control" id="agency-logo" name="logo">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal">
                                    <i class="bx bx-x me-1 align-middle"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="bx bx-check me-1 align-middle"></i> Confirm
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>
@endsection

@push('scripts')
    <script>
        function openModal(agency = null) {
            const modalTitle = document.getElementById('modal-title');
            const form = document.getElementById('agency-form');
            const nameInput = document.getElementById('agency-name');
            const nameEnInput = document.getElementById('agency-name-en');
            const emailInput = document.getElementById('agency-email');
            const phoneNumberInput = document.getElementById('agency-phone-number');
            const whatsappInput = document.getElementById('agency-whatsapp');
            const licenseInput = document.getElementById('agency-license');
            const addressInput = document.getElementById('agency-address');
            const websiteUrlInput = document.getElementById('agency-website-url');
            const descriptionInput = document.getElementById('agency-description');
            const descriptionEnInput = document.getElementById('agency-description-en');
            const socialMediaInput = document.getElementById('agency-social-media');
            const logoInput = document.getElementById('agency-logo');

            // Reset the form
            form.reset();
            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) {
                methodInput.remove();
            }

            if (agency) {
                modalTitle.textContent = 'Edit Agency';
                form.action = `/agencies/${agency.id}`;
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_method';
                input.value = 'PUT';
                form.appendChild(input);
                nameInput.value = agency.name;
                nameEnInput.value = agency.name_en;
                emailInput.value = agency.email;
                phoneNumberInput.value = agency.phone_number;
                whatsappInput.value = agency.whatsapp;
                licenseInput.value = agency.license;
                addressInput.value = agency.address;
                websiteUrlInput.value = agency.website_url;
                descriptionInput.value = agency.description;
                descriptionEnInput.value = agency.description_en;
                socialMediaInput.value = agency.social_media;
                logoInput.value = '';
            } else {
                modalTitle.textContent = 'Add New Agency';
                form.action = '{{ route("agencies.store") }}';
            }

            const modal = new bootstrap.Modal(document.querySelector('.agency-modal'));
            modal.show();
        }
    </script>
@endpush
