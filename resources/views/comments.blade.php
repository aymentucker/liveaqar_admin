@extends('layouts.app')

@section('title', 'Comments List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Comments List <span class="text-muted fw-normal ms-2">({{ $comments->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".comment-modal" class="btn btn-primary" onclick="openModal()">
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
                                            <input type="checkbox" class="form-check-input" id="commentcheck">
                                            <label class="form-check-label" for="commentcheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Comment Title</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="commentcheck{{ $comment->id }}">
                                                <label class="form-check-label" for="commentcheck{{ $comment->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->post->title ?? 'No Post' }}</td>
                                        <td>{{ $comment->title }}</td>
                                        <td>{{ $comment->email }}</td>
                                        <td>{{ $comment->rating }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $comment }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing comment -->
    <form id="comment-form" action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="modal fade comment-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New Comment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="comment-title">Comment Title (Arabic)</label>
                                    <input type="text" class="form-control" placeholder="Enter Comment Title in Arabic" id="comment-title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="comment-title-en">Comment Title (English)</label>
                                    <input type="text" class="form-control" placeholder="Enter Comment Title in English" id="comment-title-en" name="title_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="comment-email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="comment-email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="comment-rating">Rating</label>
                                    <input type="number" class="form-control" placeholder="Enter Rating" id="comment-rating" name="rating" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="comment-post">Post</label>
                                    <select class="form-control" id="comment-post" name="post_id" required>
                                        @foreach($posts as $post)
                                            <option value="{{ $post->id }}">{{ $post->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="comment-content">Comment Content (Arabic)</label>
                                    <textarea class="form-control" id="comment-content" name="content" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="comment-content-en">Comment Content (English)</label>
                                    <textarea class="form-control" id="comment-content-en" name="content_en" rows="6" required></textarea>
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
        function openModal(comment = null) {
            const modalTitle = document.getElementById('modal-title');
            const form = document.getElementById('comment-form');
            const arabicTitleInput = document.getElementById('comment-title');
            const englishTitleInput = document.getElementById('comment-title-en');
            const emailInput = document.getElementById('comment-email');
            const ratingInput = document.getElementById('comment-rating');
            const postInput = document.getElementById('comment-post');
            const contentInput = document.getElementById('comment-content');
            const contentEnInput = document.getElementById('comment-content-en');

            // Reset the form
            form.reset();
            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) {
                methodInput.remove();
            }

            if (comment) {
                modalTitle.textContent = 'Edit Comment';
                form.action = `/comments/${comment.id}`;
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_method';
                input.value = 'PUT';
                form.appendChild(input);
                arabicTitleInput.value = comment.title;
                englishTitleInput.value = comment.title_en;
                emailInput.value = comment.email;
                ratingInput.value = comment.rating;
                postInput.value = comment.post_id;
                contentInput.value = comment.content;
                contentEnInput.value = comment.content_en;
            } else {
                modalTitle.textContent = 'Add New Comment';
                form.action = '{{ route("comments.store") }}';
            }

            const modal = new bootstrap.Modal(document.querySelector('.comment-modal'));
            modal.show();
        }
    </script>
@endpush
