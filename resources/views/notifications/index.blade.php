@extends('layouts.app')

@section('title', 'Notifications List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Notifications List <span class="text-muted fw-normal ms-2">({{ $notifications->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".notification-modal" class="btn btn-primary" onclick="openModal()">
                    <i class="bx bx-plus me-1"></i> Add New
                </a>
            </div>
        </div>
    </div>

    <!-- Display Success or Error Messages -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Notifications Table -->
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
                                            <input type="checkbox" class="form-check-input" id="notificationcheck">
                                            <label class="form-check-label" for="notificationcheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Sent At</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notifications as $notification)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="notificationcheck{{ $notification->id }}">
                                                <label class="form-check-label" for="notificationcheck{{ $notification->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $notification->id }}</td>
                                        <td>{{ $notification->title }}</td>
                                        <td>{{ $notification->body }}</td>
                                        <td>
                                            @if($notification->image_url)
                                                <img src="{{ asset('storage/' . $notification->image_url) }}" alt="image" width="100">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $notification->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $notification }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST" style="display: inline;">
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
                        <!-- Pagination Links (if applicable) -->
                        {{ $notifications->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding/Editing Notification -->
    <form id="notification-form" action="{{ route('notifications.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade notification-modal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New Notification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Notification Form Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="notification-title">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Title" id="notification-title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="notification-image">Image</label>
                                    <input type="file" class="form-control" id="notification-image" name="image_url">
                                </div>
                                <div id="image-preview" class="mt-2"></div> <!-- Placeholder for image preview -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="notification-body">Body</label>
                                    <textarea class="form-control" placeholder="Enter Body" id="notification-body" name="body" rows="4" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Actions -->
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
function openModal(notification = null) {
    const modalTitle = document.getElementById('modal-title');
    const form = document.getElementById('notification-form');
    const titleInput = document.getElementById('notification-title');
    const imageInput = document.getElementById('notification-image');
    const bodyInput = document.getElementById('notification-body');
    const imagePreview = document.getElementById('image-preview');

    // Reset the form and image preview
    form.reset();
    imagePreview.innerHTML = '';
    const methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) {
        methodInput.remove();
    }

    if (notification) {
        modalTitle.textContent = 'Edit Notification';
        form.action = `/notifications/${notification.id}`;
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = '_method';
        input.value = 'PUT';
        form.appendChild(input);
        titleInput.value = notification.title;
        bodyInput.value = notification.body;

        // Preview the existing image
        if (notification.image_url) {
            imagePreview.innerHTML = `<img src="/storage/${notification.image_url}" alt="Current Image" width="100">`;
        }

        imageInput.required = false;  // Make image optional for edit
    } else {
        modalTitle.textContent = 'Add New Notification';
        form.action = '{{ route("notifications.store") }}';
        imageInput.required = false;  // Image is optional for new notifications
    }

    const modal = new bootstrap.Modal(document.querySelector('.notification-modal'));
    modal.show();
}
</script>
@endpush
