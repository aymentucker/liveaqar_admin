@extends('layouts.app')

@section('title', 'Categories List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Categories List <span
                        class="text-muted fw-normal ms-2">({{ $categories->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".category-modal" class="btn btn-primary"
                    onclick="openModal()">
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
                                    <th>ID</th>
                                    <th>English Name</th>
                                    <th>Arabic Name</th>
                                    <th>Image</th>

                                    <th style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name_en }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td><img src="{{ $category->image }}" alt="image" width="100"></td>

                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit" class="px-2 text-primary"
                                                    onclick="openModal({{ $category->toJson() }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('categories.destroycorporate', $category->id) }}"
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding/Editing Category -->
    <form id="category-form" action="{{ route('categories.storecorporate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade category-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="category-name-ar">Arabic Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Arabic name"
                                        id="category-name-ar" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="category-name-en">English Name</label>
                                    <input type="text" class="form-control" placeholder="Enter English name"
                                        id="category-name-en" name="name_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="category-image">Image</label>
                                    <input type="file" class="form-control" id="category-image" name="image">
                                </div>
                                <div id="image-preview" class="mt-2"></div>
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
                </div>
            </div>
        </div>
    </form>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function openModal(category = null) {
            const modalTitle = document.getElementById('modal-title');
            const form = document.getElementById('category-form');
            const arabicNameInput = document.getElementById('category-name-ar');
            const englishNameInput = document.getElementById('category-name-en');
            const imageInput = document.getElementById('category-image');
            const imagePreview = document.getElementById('image-preview');

            form.reset();
            imagePreview.innerHTML = '';

            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) {
                methodInput.remove();
            }

            if (category) {
                modalTitle.textContent = 'Edit Category';
                form.action = `/corporate/categories/${category.id}`;
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_method';
                input.value = 'PUT';
                form.appendChild(input);

                arabicNameInput.value = category.name;
                englishNameInput.value = category.name_en;
                if (category.image) {
                    imagePreview.innerHTML = `<img src="${category.image}" alt="Current Image" width="100">`;
                }
                imageInput.required = false; // Make image optional for edits
            } else {
                modalTitle.textContent = 'Add New';
                form.action = '{{ route('categories.storecorporate') }}';
            }

            const modal = new bootstrap.Modal(document.querySelector('.category-modal'));
            modal.show();
        }
    });
</script>
