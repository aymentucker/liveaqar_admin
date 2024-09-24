@extends('layouts.app')

@section('title', 'Properties List')

@push('styles')
    <!-- Include any additional styles if necessary -->
@endpush

@section('content')
    <!-- Header Section -->
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Properties List <span
                        class="text-muted fw-normal ms-2">({{ $properties->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <!-- Add New Property Button -->
                <a href="#" class="btn btn-primary" onclick="openPropertyModal()">
                    <i class="bx bx-plus me-1"></i> Add New Property
                </a>
            </div>
        </div>
    </div>

    <!-- Search Form -->
    <form method="GET" action="{{ route('properties.index') }}">
        <div class="row mb-4">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Search by Title"
                    value="{{ request('search') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="{{ route('properties.index') }}" class="btn btn-link">Reset</a>
            </div>
        </div>
    </form>

    <!-- Properties Table -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Table Responsive -->
                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Property ID</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Area Size</th>
                                    <th>Statuses</th>
                                    <th>Visibility</th>
                                    <th style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox"
                                                    id="propertycheck{{ $property->id }}">
                                                <label class="form-check-label"
                                                    for="propertycheck{{ $property->id }}"></label>
                                            </div>
                                        </td>
                                        <td>{{ $property->id }}</td>
                                        <td>{{ $property->title_en }}</td>
                                        <td>
                                            <span class="d-block">Sell: {{ $property->sell_price ?? 'N/A' }}</span>
                                            <span class="d-block">Rent: {{ $property->rent_price ?? 'N/A' }}</span>
                                        </td>
                                        <td>{{ $property->area_size }}</td>
                                        <td>
                                            @foreach ($property->statuses as $status)
                                                <span class="badge bg-primary">{{ $status->name_en }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" onclick="toggleVisibility({{ $property->id }})">
                                                <span
                                                    class="badge {{ $property->visibility ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $property->visibility ? 'Visible' : 'Hidden' }}
                                                </span>
                                            </a>
                                        </td>

                                        <td>
                                            <!-- Action Buttons -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <!-- Edit Button -->
                                                    <a href="javascript:void(0);" class="px-2 text-primary"
                                                        onclick="openPropertyModal({{ $property->toJson() }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <!-- Delete Form -->
                                                    <form action="{{ route('properties.destroy', $property->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="px-2 text-danger"
                                                            style="background: none; border: none;">
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
                        <!-- Pagination Links -->
                        {{ $properties->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding/Editing Property -->
    <form id="property-form" method="POST" action="{{ route('properties.store') }}">
        @csrf
        <div class="modal fade property-modal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New Property</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form Fields -->
                        <div class="row">
                            <!-- Title Fields -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title_en">Title (English)</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en"
                                        placeholder="Enter Title (English)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title_ar">Title (Arabic)</label>
                                    <input type="text" class="form-control" id="title_ar" name="title_ar"
                                        placeholder="Enter Title (Arabic)">
                                </div>
                            </div>
                            <!-- Description Fields -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="description_en">Description (English)</label>
                                    <textarea class="form-control" id="description_en" name="description_en" rows="3"
                                        placeholder="Enter Description (English)"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="description_ar">Description (Arabic)</label>
                                    <textarea class="form-control" id="description_ar" name="description_ar" rows="3"
                                        placeholder="Enter Description (Arabic)"></textarea>
                                </div>
                            </div>
                            <!-- City and State -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="city_id">City</label>
                                    <select class="form-select" id="city_id" name="city_id" onchange="updateStates()">
                                        <option selected>Select City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="state_id">State</label>
                                    <select class="form-select" id="state_id" name="state_id">
                                        <option selected>Select State</option>
                                        <!-- States will be populated based on the selected city -->
                                    </select>
                                </div>
                            </div>
                            <!-- Address and Property Code -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter Address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="property_code">Property Code</label>
                                    <input type="text" class="form-control" id="property_code" name="property_code"
                                        placeholder="Enter Property Code">
                                </div>
                            </div>
                            <!-- Prices -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="sell_price">Sell Price</label>
                                    <input type="text" class="form-control" id="sell_price" name="sell_price"
                                        placeholder="Enter Sell Price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="rent_price">Rent Price</label>
                                    <input type="text" class="form-control" id="rent_price" name="rent_price"
                                        placeholder="Enter Rent Price">
                                </div>
                            </div>
                            <!-- Rooms and Bathrooms -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="rooms">Rooms</label>
                                    <input type="number" class="form-control" id="rooms" name="rooms"
                                        placeholder="Enter Number of Rooms">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="bathrooms">Bathrooms</label>
                                    <input type="number" class="form-control" id="bathrooms" name="bathrooms"
                                        placeholder="Enter Number of Bathrooms">
                                </div>
                            </div>
                            <!-- Phone and Year Built -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="year_built">Year Built</label>
                                    <input type="number" class="form-control" id="year_built" name="year_built"
                                        placeholder="Enter Year Built">
                                </div>
                            </div>
                            <!-- Garages and Featured Video -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="garages">Garages</label>
                                    <input type="number" class="form-control" id="garages" name="garages"
                                        placeholder="Enter Number of Garages">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="featured_video">Featured Video URL</label>
                                    <input type="url" class="form-control" id="featured_video" name="featured_video"
                                        placeholder="Enter Featured Video URL">
                                </div>
                            </div>
                            <!-- Area Size and Property Type -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="area_size">Area Size</label>
                                    <input type="text" class="form-control" id="area_size" name="area_size"
                                        placeholder="Enter Area Size">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="type_id">Property Type</label>
                                    <select class="form-select" id="type_id" name="type_id">
                                        <option selected>Select Type</option>
                                        @foreach ($propertyType as $type)
                                            <option value="{{ $type->id }}">{{ $type->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Property Statuses -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Property Statuses</label>
                                    <div class="form-check">
                                        @foreach ($propertyStatus as $status)
                                            <div class="form-check d-inline-block me-3">
                                                <input type="checkbox" class="form-check-input"
                                                    id="status_{{ $status->id }}" name="statuses[]"
                                                    value="{{ $status->id }}">
                                                <label class="form-check-label"
                                                    for="status_{{ $status->id }}">{{ $status->name_en }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Footer Buttons -->
                            <div class="col-12 text-end mt-3">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal">
                                    <i class="bx bx-x me-1 align-middle"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="bx bx-check me-1 align-middle"></i> Confirm
                                </button>
                            </div>
                            <!-- End of Form Fields -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <!-- Include any additional scripts if necessary -->

    <!-- JavaScript to handle modal form for adding/editing properties -->
    <script>
        function openPropertyModal(property = null) {
            const modalTitle = document.getElementById('modal-title');
            const form = document.getElementById('property-form');
            // Get all form elements
            const titleEnInput = document.getElementById('title_en');
            const titleArInput = document.getElementById('title_ar');
            const descriptionEnInput = document.getElementById('description_en');
            const descriptionArInput = document.getElementById('description_ar');
            const citySelect = document.getElementById('city_id');
            const stateSelect = document.getElementById('state_id');
            const addressInput = document.getElementById('address');
            const propertyCodeInput = document.getElementById('property_code');
            const sellPriceInput = document.getElementById('sell_price');
            const rentPriceInput = document.getElementById('rent_price');
            const roomsInput = document.getElementById('rooms');
            const bathroomsInput = document.getElementById('bathrooms');
            const phoneInput = document.getElementById('phone');
            const yearBuiltInput = document.getElementById('year_built');
            const garagesInput = document.getElementById('garages');
            const featuredVideoInput = document.getElementById('featured_video');
            const areaSizeInput = document.getElementById('area_size');
            const typeSelect = document.getElementById('type_id');
            const statusCheckboxes = document.querySelectorAll('input[name="statuses[]"]');

            // Reset the form
            form.reset();

            // Uncheck all statuses
            statusCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });

            // Remove _method input if it exists
            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) {
                methodInput.remove();
            }

            if (property) {
                modalTitle.textContent = 'Edit Property';
                form.action = `/properties/${property.id}`;
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_method';
                input.value = 'PUT';
                form.appendChild(input);

                // Populate form fields with existing data
                titleEnInput.value = property.title_en;
                titleArInput.value = property.title_ar;
                descriptionEnInput.value = property.description_en;
                descriptionArInput.value = property.description_ar;
                addressInput.value = property.address;
                propertyCodeInput.value = property.property_code;
                sellPriceInput.value = property.sell_price;
                rentPriceInput.value = property.rent_price;
                roomsInput.value = property.rooms;
                bathroomsInput.value = property.bathrooms;
                phoneInput.value = property.phone;
                yearBuiltInput.value = property.year_built;
                garagesInput.value = property.garages;
                featuredVideoInput.value = property.featured_video;
                areaSizeInput.value = property.area_size;

                // Set selected city and state
                citySelect.value = property.city_id;
                updateStates(property.state_id);

                // Set selected property type
                typeSelect.value = property.type_id;

                // Check the statuses associated with the property
                if (property.statuses) {
                    property.statuses.forEach(status => {
                        const checkbox = document.getElementById(`status_${status.id}`);
                        if (checkbox) {
                            checkbox.checked = true;
                        }
                    });
                }
            } else {
                modalTitle.textContent = 'Add New Property';
                form.action = '{{ route('properties.store') }}';
            }

            // Show the modal
            const modal = new bootstrap.Modal(document.querySelector('.property-modal'));
            modal.show();
        }

        // Function to update States based on selected City
        function updateStates(selectedStateId = null) {
            const cityId = document.getElementById('city_id').value;
            const stateSelect = document.getElementById('state_id');
            stateSelect.innerHTML = '<option value="">Loading...</option>';

            // Fetch States for the selected city
            fetch(`/states-for-city/${encodeURIComponent(cityId)}`)
                .then(response => response.json())
                .then(data => {
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    data.forEach(state => {
                        const option = document.createElement('option');
                        option.value = state.id;
                        option.textContent = state.name_en;
                        if (selectedStateId && state.id == selectedStateId) {
                            option.selected = true;
                        }
                        stateSelect.appendChild(option);
                    });
                });
        }

        // Function to toggle the visibility of a property
        function toggleVisibility(propertyId) {
            console.log('toggleVisibility called with propertyId:', propertyId);

            if (confirm('Are you sure you want to change the visibility of this property?')) {
                const form = document.getElementById('toggle-visibility-form');
                form.action = `/properties/${propertyId}/toggle-visibility`;
                form.submit();
            }
        }
    </script>

    <!-- Hidden Form for Toggling Visibility -->
    <form id="toggle-visibility-form" method="POST" style="display: none;">
        @csrf
        @method('PUT')
    </form>
@endpush
