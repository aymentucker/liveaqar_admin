@extends('layouts.app')

@section('title', 'Categories List')

@section('content')
    <!-- Header Section -->
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Categories List <span
                        class="text-muted fw-normal ms-2">({{ $categories->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <!-- Add New Category Button -->
                <a href="#" class="btn btn-primary" onclick="openModal()">
                    <i class="bx bx-plus me-1"></i> Add New
                </a>
            </div>
        </div>
    </div>

    <!-- Categories Table -->
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
                                    <th>Main Category</th>
                                    <th style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through Main Categories -->
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name_en }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            @if($category->image)
                                                <img src="{{ asset('storage/' . $category->image) }}" alt="image" width="100">
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td>--</td> <!-- No main category for main categories -->
                                        <td>
                                            <!-- Action Buttons -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <!-- Edit Button -->
                                                    <a href="javascript:void(0);" class="px-2 text-primary"
                                                       onclick="openModal({{ json_encode([
                                                           'id' => $category->id,
                                                           'name' => $category->name,
                                                           'name_en' => $category->name_en,
                                                           'parent_id' => $category->parent_id,
                                                           'image_url' => $category->image ? asset('storage/' . $category->image) : null
                                                       ]) }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <!-- Delete Form -->
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
                                    <!-- Loop through Subcategories -->
                                    @foreach ($category->children as $subCategory)
                                        <tr>
                                            <td>{{ $subCategory->id }}</td>
                                            <!-- Indent Subcategory Names -->
                                            <td>&nbsp;&nbsp;&nbsp;{{ $subCategory->name_en }}</td>
                                            <td>&nbsp;&nbsp;&nbsp;{{ $subCategory->name }}</td>
                                            <td>
                                                @if($subCategory->image)
                                                    <img src="{{ asset('storage/' . $subCategory->image) }}" alt="image" width="100">
                                                @else
                                                    --
                                                @endif
                                            </td>
                                            <td>{{ $category->name_en }}</td> <!-- Display Main Category Name -->
                                            <td>
                                                <!-- Action Buttons -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <!-- Edit Button -->
                                                        <a href="javascript:void(0);" class="px-2 text-primary"
                                                           onclick="openModal({{ json_encode([
                                                               'id' => $subCategory->id,
                                                               'name' => $subCategory->name,
                                                               'name_en' => $subCategory->name_en,
                                                               'parent_id' => $subCategory->parent_id,
                                                               'image_url' => $subCategory->image ? asset('storage/' . $subCategory->image) : null
                                                           ]) }})">
                                                            <i class="bx bx-pencil font-size-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <!-- Delete Form -->
                                                        <form action="{{ route('categories.destroycorporate', $subCategory->id) }}"
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
                        <!-- Form Fields -->
                        <div class="row">
                            <!-- Arabic Name -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="category-name-ar">Arabic Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Arabic name"
                                        id="category-name-ar" name="name" required>
                                </div>
                            </div>
                            <!-- English Name -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="category-name-en">English Name</label>
                                    <input type="text" class="form-control" placeholder="Enter English name"
                                        id="category-name-en" name="name_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Main Category Select -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="parent-category">Main Category</label>
                                    <select class="form-control" id="parent-category" name="parent_id">
                                        <option value="">None (This is a main category)</option>
                                        @foreach($mainCategories as $mainCategory)
                                            <option value="{{ $mainCategory->id }}">{{ $mainCategory->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Image Upload -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="category-image">Image</label>
                                    <input type="file" class="form-control" id="category-image" name="image">
                                    <div id="image-preview" class="mt-2"></div>
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
    function openModal(category = null) {
        const modalTitle = document.getElementById('modal-title');
        const form = document.getElementById('category-form');
        const arabicNameInput = document.getElementById('category-name-ar');
        const englishNameInput = document.getElementById('category-name-en');
        const parentCategorySelect = document.getElementById('parent-category');
        const imageInput = document.getElementById('category-image');
        const imagePreview = document.getElementById('image-preview');

        // Reset the form and image preview
        form.reset();
        imagePreview.innerHTML = '';

        // Remove _method input if it exists
        const methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) {
            methodInput.remove();
        }

        if (category) {
            // Edit Mode
            modalTitle.textContent = 'Edit Category';
            form.action = `/corporate/categories/${category.id}`;
            // Add hidden _method input for PUT request
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = '_method';
            input.value = 'PUT';
            form.appendChild(input);

            // Populate form fields with existing data
            arabicNameInput.value = category.name;
            englishNameInput.value = category.name_en;
            parentCategorySelect.value = category.parent_id || '';

            // Display existing image
            if (category.image_url) {
                imagePreview.innerHTML = `<img src="${category.image_url}" alt="Current Image" width="100">`;
            }
            imageInput.required = false; // Image is optional when editing
        } else {
            // Add Mode
            modalTitle.textContent = 'Add New';
            form.action = '{{ route('categories.storecorporate') }}';
            parentCategorySelect.value = ''; // Default to no parent
            imageInput.required = true; // Image is required when adding
        }

        // Show the modal
        const modal = new bootstrap.Modal(document.querySelector('.category-modal'));
        modal.show();
    }
</script>
@endpush
