@extends('layouts.app')

@section('title', 'Ads List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Ads List <span class="text-muted fw-normal ms-2">({{ $ads->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".ad-modal" class="btn btn-primary" onclick="openModal()">
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
                                            <input type="checkbox" class="form-check-input" id="contacusercheck">
                                            <label class="form-check-label" for="contacusercheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ads as $ad)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck{{ $ad->id }}">
                                                <label class="form-check-label" for="contacusercheck{{ $ad->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $ad->id }}</td>
                                        <td>{{ $ad->title_en }}</td>
                                        <td><img src="{{ asset('storage/' . $ad->image) }}" alt="image" width="100"></td>
                                        <td>{{ $ad->end_date }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $ad }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('ads.destroy', $ad->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing ad -->
    <form id="ad-form" action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade ad-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                                    <label class="form-label" for="ad-title-en">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Title" id="ad-title-en" name="title_en" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ad-image">Image</label>
                                    <input type="file" class="form-control" id="ad-image" name="image" required>
                                </div>
                                <div id="image-preview" class="mt-2"></div> <!-- Placeholder for image preview -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ad-description-en">Description</label>
                                    <input type="text" class="form-control" placeholder="Enter Description" id="ad-description-en" name="description_en" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ad-end-date">End Date</label>
                                    <input type="date" class="form-control" id="ad-end-date" name="end_date" required>
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

<script>
function openModal(ad = null) {
    const modalTitle = document.getElementById('modal-title');
    const form = document.getElementById('ad-form');
    const englishTitleInput = document.getElementById('ad-title-en');
    const imageInput = document.getElementById('ad-image');
    const englishDescriptionInput = document.getElementById('ad-description-en');
    const endDateInput = document.getElementById('ad-end-date');
    const imagePreview = document.getElementById('image-preview');

    // Reset the form and image preview
    form.reset();
    imagePreview.innerHTML = '';
    const methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) {
        methodInput.remove();
    }

    if (ad) {
        modalTitle.textContent = 'Edit Ad';
        form.action = `/ads/${ad.id}`;
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = '_method';
        input.value = 'PUT';
        form.appendChild(input);
        englishTitleInput.value = ad.title_en;
        englishDescriptionInput.value = ad.description_en;
        endDateInput.value = ad.end_date;

        // Preview the existing image
        if (ad.image) {
            imagePreview.innerHTML = `<img src="/storage/${ad.image}" alt="Current Image" width="100">`;
        }

        imageInput.required = false;  // Make image optional for edit
    } else {
        modalTitle.textContent = 'Add New';
        form.action = '{{ route("ads.store") }}';
        imageInput.required = true;  // Ensure image is required for new ads
    }

    const modal = new bootstrap.Modal(document.querySelector('.ad-modal'));
    modal.show();
}
</script>
