@extends('layouts.app')

@section('title', 'Properties List')

@push('styles')
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/gridjs/theme/mermaid.min.css') }}">

    <!-- flatpickr css -->
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('scripts')
    <!-- gridjs js -->
    <script src="{{ asset('assets/libs/gridjs/gridjs.umd.js') }}"></script>

    <!-- flatpickr js -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- invoice-list init -->
    <script src="{{ asset('assets/js/pages/invoice-list.init.js') }}"></script>
@endpush

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="position-relative">
                        <div class="modal-button mt-2">
                            <div class="row align-items-start">
                                <div class="col-sm-auto">
                                    <div class="d-flex gap-1">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datepicker-range">
                                            <span class="input-group-text"><i class="bx bx-calendar-event"></i></span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-link text-body shadow-none dropdown-toggle" href="#"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="mt-3 mt-md-0 mb-3">
                                        {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Invoice</button> --}}

                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target=".add-new"><i class="mdi mdi-plus me-1"></i> Add
                                            Property</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>


                    <div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Add New Property</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="addPropertyForm" method="POST" action="{{ route('properties.store') }}">
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="title_en">Title (English)</label>
                                                    <input type="text" class="form-control" id="title_en"
                                                        name="title_en" placeholder="Enter Title (English)">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="title_ar">Title (Arabic)</label>
                                                    <input type="text" class="form-control" id="title_ar"
                                                        name="title_ar" placeholder="Enter Title (Arabic)">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="description_en">Description
                                                        (English)</label>
                                                    <textarea class="form-control" id="description_en" name="description_en" rows="3"
                                                        placeholder="Enter Description (English)"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="description_ar">Description
                                                        (Arabic)</label>
                                                    <textarea class="form-control" id="description_ar" name="description_ar" rows="3"
                                                        placeholder="Enter Description (Arabic)"></textarea>
                                                </div>
                                            </div>
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
                                                        {{-- States will be populated based on the city --}}
                                                        {{-- @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name_en }}
                                                            </option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="address">Address</label>
                                                    <input type="text" class="form-control" id="address"
                                                        name="address" placeholder="Enter address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="property_code">Property Code</label>
                                                    <input type="text" class="form-control" id="property_code"
                                                        name="property_code" placeholder="Enter Property Code">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="price">Price</label>
                                                    <input type="text" class="form-control" id="price"
                                                        name="price" placeholder="Enter Price">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="rooms">Rooms</label>
                                                    <input type="number" class="form-control" id="rooms"
                                                        name="rooms" placeholder="Enter Number of Rooms">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="bathrooms">Bathrooms</label>
                                                    <input type="number" class="form-control" id="bathrooms"
                                                        name="bathrooms" placeholder="Enter Number of Bathrooms">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="phone">Phone</label>
                                                    <input type="phone" class="form-control" id="phone"
                                                        name="phone" placeholder="Enter phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="year_built">Year built</label>
                                                    <input type="number" class="form-control" id="year_built"
                                                        name="year_built" placeholder="Enter year built">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="garages">Garages</label>
                                                    <input type="number" class="form-control" id="garages"
                                                        name="garages" placeholder="Enter garages">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="garages">Featured Video</label>
                                                    <input type="url" class="form-control" id="featured_video"
                                                        name="featured_video" placeholder="Enter featured video">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="area_size">Area Size</label>
                                                    <input type="text" class="form-control" id="area_size"
                                                        name="area_size" placeholder="Enter Area Size">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="type_id">Property Type</label>
                                                    <select class="form-select" id="type_id" name="type_id">
                                                        <option selected>Select Type</option>
                                                        @foreach ($propertyType as $type)
                                                            <option value="{{ $type->id }}">{{ $type->name_en }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="status_id">Property Status</label>
                                                    <select class="form-select" id="status_id" name="status_id">
                                                        <option selected>Select Status</option>
                                                        @foreach ($propertyStatus as $status)
                                                            <option value="{{ $status->id }}">{{ $status->name_en }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 text-end mt-3">
                                                <button type="button" class="btn btn-danger me-1"
                                                    data-bs-dismiss="modal"><i class="bx bx-x me-1 align-middle"></i>
                                                    Cancel</button>
                                                <button type="submit" class="btn btn-success" id="btn-save-event"><i
                                                        class="bx bx-check me-1 align-middle"></i> Confirm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>



                    <div id="table-properties-list">
                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                            <div class="gridjs-head">
                                <div class="gridjs-search"><input type="search" placeholder="Type a keyword..."
                                        aria-label="Type a keyword..." class="gridjs-input gridjs-search-input"></div>
                            </div>
                            <div class="gridjs-wrapper" style="height: auto;">
                                <table role="grid" class="gridjs-table" style="height: auto;">
                                    <thead class="gridjs-thead">
                                        <tr class="gridjs-tr">
                                            <th data-column-id="#" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                style="min-width: 48px; width: 76px;">
                                                <div class="gridjs-th-content">#</div>
                                            </th>
                                            <th data-column-id="propertyId" class="gridjs-th gridjs-th-sort"
                                                tabindex="0" style="min-width: 96px; width: 152px;">
                                                <div class="gridjs-th-content">Property ID</div>
                                            </th>
                                            <th data-column-id="title" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                style="min-width: 111px; width: 176px;">
                                                <div class="gridjs-th-content">Title</div>
                                            </th>
                                            <th data-column-id="price" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                style="min-width: 138px; width: 219px;">
                                                <div class="gridjs-th-content">Price</div>
                                            </th>
                                            <th data-column-id="area_size" class="gridjs-th gridjs-th-sort"
                                                tabindex="0" style="min-width: 91px; width: 144px;">
                                                <div class="gridjs-th-content">Area Size</div>
                                            </th>
                                            <th data-column-id="visibility" class="gridjs-th gridjs-th-sort"
                                                tabindex="0" style="min-width: 84px; width: 133px;">
                                                <div class="gridjs-th-content">Visibility</div>
                                            </th>
                                            <th data-column-id="action" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                style="min-width: 81px; width: 128px;">
                                                <div class="gridjs-th-content">Action</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="gridjs-tbody">
                                        @foreach ($properties as $property)
                                            <tr class="gridjs-tr">
                                                <td data-column-id="#" class="gridjs-td">
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="propertycheck{{ $property->id }}">
                                                        <label class="form-check-label"
                                                            for="propertycheck{{ $property->id }}"></label>
                                                    </div>
                                                </td>
                                                <td data-column-id="propertyId" class="gridjs-td">
                                                    <span class="fw-semibold">{{ $property->id }}</span>
                                                </td>
                                                <td data-column-id="title" class="gridjs-td">{{ $property->title_en }}
                                                </td>
                                                <td data-column-id="price" class="gridjs-td">{{ $property->price }}</td>
                                                <td data-column-id="area_size" class="gridjs-td">
                                                    {{ $property->area_size }}</td>
                                                <td data-column-id="visibility" class="gridjs-td">
                                                    <span>
                                                        <span
                                                            class="badge badge-pill {{ $property->visibility ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning' }} font-size-12">
                                                            {{ $property->visibility ? 'Visible' : 'Hidden' }}
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Edit"
                                                                class="px-2 text-primary">
                                                                <i class="bx bx-pencil font-size-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Delete"
                                                                class="px-2 text-danger">
                                                                <i class="bx bx-trash-alt font-size-18"></i>
                                                            </a>
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
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


       {{-- JavaScript to update States --}}
       <script>
        function updateStates() {
            var cityId = document.getElementById('city_id').value; // Use cityId instead of cityName
            var stateSelect = document.getElementById('state_id');
            stateSelect.innerHTML = '<option value="">Loading ...</option>';

            // Fetch States for the selected city
            fetch(`/states-for-city/${encodeURIComponent(cityId)}`)
                .then(response => response.json())
                .then(data => {
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    data.forEach(state => {
                        stateSelect.innerHTML += `<option value="${state.id}">${state.name_en}</option>`;
                    });
                });
        }
    </script>
@endsection
