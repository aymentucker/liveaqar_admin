@extends('layouts.app')

@section('title', 'Posts List')

@push('styles')
    <!-- Quill CSS -->
    <link href="{{'assets/libs/quill/quill.core.css'}}" rel="stylesheet" type="text/css" />
    <link href="{{'assets/libs/quill/quill.bubble.css'}}" rel="stylesheet" type="text/css" />
    <link href="{{'assets/libs/quill/quill.snow.css'}}" rel="stylesheet" type="text/css" />
    <style>
        .quill-editor {
            height: 300px;
        }
    </style>
@endpush

@push('scripts')
    <!-- Quill JS -->
    <script src="{{'assets/libs/quill/quill.min.js'}}"></script>

    <!-- Initialize Quill -->
    <script>
        let quillContent;
        let quillContentEn;

        function initializeQuill() {
            quillContent = new Quill('#post-content', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ 'header': [1, 2, false] }],
                        ['bold', 'italic', 'underline', 'blockquote'],
                        // ['image', 'link' ,'code-block'],
                        ['link']
                    ]
                }
            });

            quillContentEn = new Quill('#post-content-en', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ 'header': [1, 2, false] }],
                        ['bold', 'italic', 'underline', 'blockquote'],
                        ['link']
                    ]
                }
            });
        }

        function openModal(post = null) {
            const modalTitle = document.getElementById('modal-title');
            const form = document.getElementById('post-form');
            const arabicTitleInput = document.getElementById('post-title');
            const englishTitleInput = document.getElementById('post-title-en');
            const imageInput = document.getElementById('post-image');
            const categoryInput = document.getElementById('post-category');
            const imagePreview = document.getElementById('image-preview');

            // Reset the form and image preview
            form.reset();
            quillContent.root.innerHTML = '';
            quillContentEn.root.innerHTML = '';
            imagePreview.innerHTML = '';
            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) {
                methodInput.remove();
            }

            if (post) {
                modalTitle.textContent = 'Edit Post';
                form.action = `/posts/${post.id}`;
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_method';
                input.value = 'PUT';
                form.appendChild(input);
                arabicTitleInput.value = post.title;
                englishTitleInput.value = post.title_en;
                categoryInput.value = post.category_id;

                // Set Quill content
                quillContent.root.innerHTML = post.content;
                quillContentEn.root.innerHTML = post.content_en;

                // Preview the existing image
                if (post.featured_image) {
                    imagePreview.innerHTML = `<img src="/storage/${post.featured_image}" alt="Current Image" width="100">`;
                }

                imageInput.required = false;  // Make image optional for edit
            } else {
                modalTitle.textContent = 'Add New';
                form.action = '{{ route("posts.store") }}';
                imageInput.required = true;  // Ensure image is required for new posts
            }

            const modal = new bootstrap.Modal(document.querySelector('.post-modal'));
            modal.show();
        }

        // Ensure Quill content is added to hidden textareas on form submission
        document.getElementById('post-form').addEventListener('submit', function(e) {
            e.preventDefault();
            document.querySelector('input[name="content"]').value = quillContent.root.innerHTML;
            document.querySelector('input[name="content_en"]').value = quillContentEn.root.innerHTML;
            this.submit();
        });

        // Initialize Quill editor on modal show
        document.addEventListener('DOMContentLoaded', function() {
            initializeQuill();
        });
    </script>
@endpush

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Posts List <span class="text-muted fw-normal ms-2">({{ $posts->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".post-modal" class="btn btn-primary" onclick="openModal()">
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
                                            <input type="checkbox" class="form-check-input" id="postcheck">
                                            <label class="form-check-label" for="postcheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Arabic Title</th>
                                    <th scope="col">English Title</th>
                                    <th scope="col">Featured Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="postcheck{{ $post->id }}">
                                                <label class="form-check-label" for="postcheck{{ $post->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->title_en }}</td>
                                        <td><img src="{{ asset('storage/' . $post->featured_image) }}" alt="image" width="100"></td>
                                        <td>{{ $post->category->name ?? 'No Category' }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $post }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing post -->
    <form id="post-form" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="content">
        <input type="hidden" name="content_en">
        <div class="modal fade post-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                                    <label class="form-label" for="post-title">Arabic Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Arabic Title" id="post-title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="post-title-en">English Title</label>
                                    <input type="text" class="form-control" placeholder="Enter English Title" id="post-title-en" name="title_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="post-image">Featured Image</label>
                                    <input type="file" class="form-control" id="post-image" name="featured_image" required>
                                </div>
                                <div id="image-preview" class="mt-2"></div> <!-- Placeholder for image preview -->
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="post-category">Category</label>
                                    <select class="form-control" id="post-category" name="category_id" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="post-content">Arabic Content</label>
                                    <div id="post-content" class="quill-editor"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="post-content-en">English Content</label>
                                    <div id="post-content-en" class="quill-editor"></div>
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
