@extends('layouts.app')

@section('title', 'Reviews List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Reviews List <span class="text-muted fw-normal ms-2">({{ $reviews->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".review-modal" class="btn btn-primary" onclick="openModal()">
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
                                            <input type="checkbox" class="form-check-input" id="reviewcheck">
                                            <label class="form-check-label" for="reviewcheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Property Name</th>
                                    <th scope="col">Review Title</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="reviewcheck{{ $review->id }}">
                                                <label class="form-check-label" for="reviewcheck{{ $review->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $review->id }}</td>
                                        <td>{{ $review->property->name ?? 'No Property' }}</td>
                                        <td>{{ $review->title }}</td>
                                        <td>{{ $review->email }}</td>
                                        <td>{{ $review->rating }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $review }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing review -->
    <form id="review-form" action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="modal fade review-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-title">Review Title (Arabic)</label>
                                    <input type="text" class="form-control" placeholder="Enter Review Title in Arabic" id="review-title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-title-en">Review Title (English)</label>
                                    <input type="text" class="form-control" placeholder="Enter Review Title in English" id="review-title-en" name="title_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="review-email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-rating">Rating</label>
                                    <input type="number" class="form-control" placeholder="Enter Rating" id="review-rating" name="rating" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-property">Property</label>
                                    <select class="form-control" id="review-property" name="property_id" >
                                        @foreach($properties as $property)
                                            <option value="{{ $property->id }}"><b>{{ $property->name }}</b></option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-agency">Agency</label>
                                    <select class="form-control" id="review-agency" name="agency_id" >
                                        @foreach($agencies as $agency)
                                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-content">Review Content (Arabic)</label>
                                    <textarea class="form-control" id="review-content" name="content" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="review-content-en">Review Content (English)</label>
                                    <textarea class="form-control" id="review-content-en" name="content_en" rows="6" required></textarea>
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
        function openModal(review = null) {
            const modalTitle = document.getElementById('modal-title');
            const form = document.getElementById('review-form');
            const arabicTitleInput = document.getElementById('review-title');
            const englishTitleInput = document.getElementById('review-title-en');
            const emailInput = document.getElementById('review-email');
            const ratingInput = document.getElementById('review-rating');
            const propertyInput = document.getElementById('review-property');
            const agencyInput = document.getElementById('review-agency');
            const contentInput = document.getElementById('review-content');
            const contentEnInput = document.getElementById('review-content-en');

            // Reset the form
            form.reset();
            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) {
                methodInput.remove();
            }

            if (review) {
                modalTitle.textContent = 'Edit Review';
                form.action = `/reviews/${review.id}`;
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_method';
                input.value = 'PUT';
                form.appendChild(input);
                arabicTitleInput.value = review.title;
                englishTitleInput.value = review.title_en;
                emailInput.value = review.email;
                ratingInput.value = review.rating;
                propertyInput.value = review.property_id;
                agencyInput.value = review.agency_id;
                contentInput.value = review.content;
                contentEnInput.value = review.content_en;
            } else {
                modalTitle.textContent = 'Add New Review';
                form.action = '{{ route("reviews.store") }}';
            }

            const modal = new bootstrap.Modal(document.querySelector('.review-modal'));
            modal.show();
        }
    </script>
@endpush
