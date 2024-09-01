@extends('layouts.app')

@section('title', 'Partners List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Partners List <span class="text-muted fw-normal ms-2">({{ $partners->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".partner-modal" class="btn btn-primary" onclick="openModal()">
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
                                    <th scope="col">Arabic Title</th>
                                    <th scope="col">English Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">URL</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partners as $partner)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck{{ $partner->id }}">
                                                <label class="form-check-label" for="contacusercheck{{ $partner->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $partner->id }}</td>
                                        <td>{{ $partner->title }}</td>
                                        <td>{{ $partner->title_en }}</td>
                                        <td><img src="{{ asset('storage/' . $partner->image) }}" alt="image" width="100"></td>
                                        <td>{{ $partner->url }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $partner }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing Partner -->
    <form id="partner-form" action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade partner-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                                    <label class="form-label" for="partner-title">Arabic Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Arabic Title" id="partner-title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="partner-title-en">English Title</label>
                                    <input type="text" class="form-control" placeholder="Enter English Title" id="partner-title-en" name="title_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="partner-image">Image</label>
                                    <input type="file" class="form-control" id="partner-image" name="image" required>
                                </div>
                                <div id="image-preview" class="mt-2"></div> <!-- Placeholder for image preview -->
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="partner-url">URL</label>
                                    <input type="url" class="form-control" placeholder="Enter URL" id="partner-url" name="url" required>
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
function openModal(partner = null) {
    const modalTitle = document.getElementById('modal-title');
    const form = document.getElementById('partner-form');
    const arabicTitleInput = document.getElementById('partner-title');
    const englishTitleInput = document.getElementById('partner-title-en');
    const imageInput = document.getElementById('partner-image');
    const urlInput = document.getElementById('partner-url');
    const imagePreview = document.getElementById('image-preview');

    // Reset the form and image preview
    form.reset();
    imagePreview.innerHTML = '';
    const methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) {
        methodInput.remove();
    }

    if (partner) {
        modalTitle.textContent = 'Edit Partner';
        form.action = `/partners/${partner.id}`;
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = '_method';
        input.value = 'PUT';
        form.appendChild(input);
        arabicTitleInput.value = partner.title;
        englishTitleInput.value = partner.title_en;
        urlInput.value = partner.url;

        // Preview the existing image
        if (partner.image) {
            imagePreview.innerHTML = `<img src="/storage/${partner.image}" alt="Current Image" width="100">`;
        }

        imageInput.required = false;  // Make image optional for edit
    } else {
        modalTitle.textContent = 'Add New';
        form.action = '{{ route("partners.store") }}';
        imageInput.required = true;  // Ensure image is required for new partners
    }

    const modal = new bootstrap.Modal(document.querySelector('.partner-modal'));
    modal.show();
}
</script>
