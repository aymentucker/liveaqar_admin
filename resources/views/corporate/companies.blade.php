@extends('layouts.app')

@section('title', 'Companies List')

@section('content')
    <!-- Header Section -->
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Companies List <span class="text-muted fw-normal ms-2">({{ $companies->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <!-- Add New Company Button -->
                <a href="#" class="btn btn-primary" onclick="openModal()">
                    <i class="bx bx-plus me-1"></i> Add New
                </a>
            </div>
        </div>
    </div>

    <!-- Companies Table -->
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
                                            <input type="checkbox" class="form-check-input" id="companycheck">
                                            <label class="form-check-label" for="companycheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Categories</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">WhatsApp</th>
                                    <th scope="col">Address</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="companycheck{{ $company->id }}">
                                                <label class="form-check-label" for="companycheck{{ $company->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $company->id }}</td>
                                        <td>
                                            @if($company->logo)
                                                <img src="{{ Storage::url($company->logo) }}" alt="Company Logo" width="100">
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td>{{ $company->name_en }}</td>
                                        <td>
                                            @foreach($company->categories as $category)
                                                <span>{{ $category->name_en }}@if(!$loop->last), @endif</span>
                                            @endforeach
                                        </td>
                                        <td>{{ $company->email ?? 'N/A' }}</td>
                                        <td>{{ $company->phone_number ?? 'N/A' }}</td>
                                        <td>{{ $company->whatsapp ?? 'N/A' }}</td>
                                        <td>{{ $company->address ?? 'N/A' }}</td>
                                        <td>
                                            <!-- Action Buttons -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <!-- Edit Button -->
                                                    <a href="javascript:void(0);" class="px-2 text-primary"
                                                       onclick="openModal({{ json_encode([
                                                           'id' => $company->id,
                                                           'name' => $company->name,
                                                           'name_en' => $company->name_en,
                                                           'email' => $company->email,
                                                           'phone_number' => $company->phone_number,
                                                           'whatsapp' => $company->whatsapp,
                                                           'license' => $company->license,
                                                           'address' => $company->address,
                                                           'website_url' => $company->website_url,
                                                           'description' => $company->description,
                                                           'description_en' => $company->description_en,
                                                           'social_media' => $company->social_media,
                                                           'logo_url' => $company->logo ? Storage::url($company->logo) : null,
                                                           'sub_category_ids' => $company->categories->pluck('id')->toArray(),
                                                       ]) }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <!-- Delete Form -->
                                                    <form action="{{ route('companies.destroycorporate', $company->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing Company -->
    <form id="company-form" action="{{ route('companies.storecorporate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade company-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New Company</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Fields -->
                        <div class="row">
                            <!-- Name Fields -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="company-name">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" id="company-name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="company-name-en">Name (English)</label>
                                    <input type="text" class="form-control" placeholder="Enter Name in English" id="company-name-en" name="name_en" required>
                                </div>
                            </div>
                            <!-- Category Selection -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Subcategories</label>
                                    <div id="company-categories" style="max-height: 150px; overflow-y: auto; border: 1px solid #ced4da; padding: 10px;">
                                        @foreach($mainCategories as $mainCategory)
                                            <strong>{{ $mainCategory->name_en }}</strong><br>
                                            @foreach($mainCategory->children as $subCategory)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="sub_category_ids[]" value="{{ $subCategory->id }}" id="subCategory{{ $subCategory->id }}">
                                                    <label class="form-check-label" for="subCategory{{ $subCategory->id }}">
                                                        {{ $subCategory->name_en }}
                                                    </label>
                                                </div>
                                            @endforeach
                                            <hr>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Other Fields -->
                        <div class="row">
                            <!-- Email, Phone, WhatsApp, License -->
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="company-email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="company-email" name="email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="company-phone-number">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number" id="company-phone-number" name="phone_number">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="company-whatsapp">WhatsApp</label>
                                    <input type="text" class="form-control" placeholder="Enter WhatsApp Number" id="company-whatsapp" name="whatsapp">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="company-license">License</label>
                                    <input type="text" class="form-control" placeholder="Enter License Number" id="company-license" name="license">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Address, Website URL -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="company-address">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address" id="company-address" name="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="company-website-url">Website URL</label>
                                    <input type="url" class="form-control" placeholder="Enter Website URL" id="company-website-url" name="website_url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Description, Social Media, Logo -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="company-description">Description</label>
                                    <textarea class="form-control" id="company-description" name="description" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="company-description-en">Description (English)</label>
                                    <textarea class="form-control" id="company-description-en" name="description_en" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Social Media, Logo -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="company-social-media">Social Media</label>
                                    <textarea class="form-control" id="company-social-media" name="social_media" rows="1" placeholder='{"facebook": "url", "twitter": "url"}'></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="company-logo">Logo</label>
                                    <input type="file" class="form-control" id="company-logo" name="logo">
                                    <div id="logo-preview" class="mt-2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Footer Buttons -->
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
                        <!-- End of Form Fields -->
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

<!-- JavaScript Section -->
@push('scripts')
<script>
    function openModal(company = null) {
        const modalTitle = document.getElementById('modal-title');
        const form = document.getElementById('company-form');
        const nameInput = document.getElementById('company-name');
        const nameEnInput = document.getElementById('company-name-en');
        const emailInput = document.getElementById('company-email');
        const phoneNumberInput = document.getElementById('company-phone-number');
        const whatsappInput = document.getElementById('company-whatsapp');
        const licenseInput = document.getElementById('company-license');
        const addressInput = document.getElementById('company-address');
        const websiteUrlInput = document.getElementById('company-website-url');
        const descriptionInput = document.getElementById('company-description');
        const descriptionEnInput = document.getElementById('company-description-en');
        const socialMediaInput = document.getElementById('company-social-media');
        const logoInput = document.getElementById('company-logo');
        const logoPreview = document.getElementById('logo-preview');

        // Reset the form
        form.reset();
        logoPreview.innerHTML = '';

        // Uncheck all subcategory checkboxes
        const subCategoryCheckboxes = document.querySelectorAll('input[name="sub_category_ids[]"]');
        subCategoryCheckboxes.forEach(checkbox => {
            checkbox.checked = false;
        });

        // Remove _method input if it exists
        const methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) {
            methodInput.remove();
        }

        if (company) {
            modalTitle.textContent = 'Edit Company';
            form.action = `/corporate/companies/${company.id}`;
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = '_method';
            input.value = 'PUT';
            form.appendChild(input);

            // Populate form fields with existing data
            nameInput.value = company.name;
            nameEnInput.value = company.name_en;
            emailInput.value = company.email;
            phoneNumberInput.value = company.phone_number;
            whatsappInput.value = company.whatsapp;
            licenseInput.value = company.license;
            addressInput.value = company.address;
            websiteUrlInput.value = company.website_url;
            descriptionInput.value = company.description;
            descriptionEnInput.value = company.description_en;
            socialMediaInput.value = company.social_media;

            // Display existing logo
            if (company.logo_url) {
                logoPreview.innerHTML = `<img src="${company.logo_url}" alt="Current Logo" width="100">`;
            }
            logoInput.required = false; // Logo is optional when editing

            // Parse and check the company's subcategories
            if (company.sub_category_ids) {
                const selectedSubCategories = company.sub_category_ids;
                subCategoryCheckboxes.forEach(checkbox => {
                    if (selectedSubCategories.includes(parseInt(checkbox.value))) {
                        checkbox.checked = true;
                    }
                });
            }

        } else {
            modalTitle.textContent = 'Add New Company';
            form.action = '{{ route("companies.storecorporate") }}';
            logoInput.required = true; // Logo is required when adding
        }

        // Show the modal
        const modal = new bootstrap.Modal(document.querySelector('.company-modal'));
        modal.show();
    }
</script>
@endpush
