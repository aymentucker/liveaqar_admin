@extends('layouts.app')

@section('title', 'Property Types List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Property Types List <span class="text-muted fw-normal ms-2">({{ $propertyTypes->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".property-type-modal" class="btn btn-primary" onclick="openModal()">
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
                                    <th scope="col">English Name</th>
                                    <th scope="col">Arabic Name</th>

                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($propertyTypes as $propertyType)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck{{ $propertyType->id }}">
                                                <label class="form-check-label" for="contacusercheck{{ $propertyType->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $propertyType->id }}</td>

                                        <td>{{ $propertyType->name_en }}</td>
                                        <td>{{ $propertyType->name }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $propertyType }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('property-types.destroy', $propertyType->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing Property Type -->
    <form id="property-type-form" action="{{ route('property-types.store') }}" method="POST">
        @csrf
        <div class="modal fade property-type-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                                    <label class="form-label" for="property-type-name-ar">Arabic Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Arabic name" id="property-type-name-ar" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="property-type-name-en">English Name</label>
                                    <input type="text" class="form-control" placeholder="Enter English name" id="property-type-name-en" name="name_en" required>
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
function openModal(propertyType = null) {
    const modalTitle = document.getElementById('modal-title');
    const form = document.getElementById('property-type-form');
    const arabicNameInput = document.getElementById('property-type-name-ar');
    const englishNameInput = document.getElementById('property-type-name-en');

    // Reset the form
    form.reset();
    // Remove any previous hidden _method input
    const methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) {
        methodInput.remove();
    }

    if (propertyType) {
        modalTitle.textContent = 'Edit Property Type';
        form.action = `/property-types/${propertyType.id}`;
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = '_method';
        input.value = 'PUT';
        form.appendChild(input);
        arabicNameInput.value = propertyType.name;
        englishNameInput.value = propertyType.name_en;
    } else {
        modalTitle.textContent = 'Add New';
        form.action = '{{ route("property-types.store") }}';
    }

    const modal = new bootstrap.Modal(document.querySelector('.property-type-modal'));
    modal.show();
}
</script>
