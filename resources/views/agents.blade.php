@extends('layouts.app')

@section('title', 'Agents List')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Agents List <span class="text-muted fw-normal ms-2">({{ $agents->count() }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target=".agent-modal" class="btn btn-primary" onclick="openModal()">
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
                                            <input type="checkbox" class="form-check-input" id="agentcheck">
                                            <label class="form-check-label" for="agentcheck"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">User Email</th>
                                    <th scope="col">Agency Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">WhatsApp</th>
                                    <th scope="col">Language</th>
                                    <th scope="col">Address</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agents as $agent)
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="agentcheck{{ $agent->id }}">
                                                <label class="form-check-label" for="agentcheck{{ $agent->id }}"></label>
                                            </div>
                                        </th>
                                        <td>{{ $agent->id }}</td>
                                        <td>{{ $agent->user->name }}</td>
                                        <td>{{ $agent->user->email }}</td>
                                        <td>{{ $agent->agency->name ?? 'No Agency' }}</td>
                                        <td>{{ $agent->position }}</td>
                                        <td>{{ $agent->user->phone }}</td>
                                        <td>{{ $agent->user->whatsapp ?? 'N/A' }}</td>
                                        <td>{{ $agent->language }}</td>
                                        <td>{{ $agent->address ?? 'N/A' }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
   data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick='openModal(@json($agent))'>
    <i class="bx bx-pencil font-size-18"></i>
</a>

                                                    {{-- <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary" onclick="openModal({{ $agent }})">
                                                        <i class="bx bx-pencil font-size-18"></i>
                                                    </a> --}}
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" style="display: inline;">
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

    <!-- Modal for Adding/Editing agent -->
    <form id="agent-form" action="{{ route('agents.store') }}" method="POST">
        @csrf
        <div class="modal fade agent-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add New Agent</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                             <!-- User Information -->
                        <div class="mb-3">
                            <label class="form-label" for="user-name">User Name</label>
                            <input type="text" class="form-control" id="user-name" name="user_name" placeholder="Enter User Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user-email">User Email</label>
                            <input type="email" class="form-control" id="user-email" name="user_email" placeholder="Enter User Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user-password">User Password</label>
                            <input type="password" class="form-control" id="user-password" name="user_password" placeholder="Enter User Password">
                        </div>

                              <!-- Agent Information -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agent-position">Position</label>
                                    <input type="text" class="form-control" placeholder="Enter Position" id="agent-position" name="position" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agent-mobile-number">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number" id="agent-mobile-number" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agent-whatsapp">WhatsApp</label>
                                    <input type="text" class="form-control" placeholder="Enter WhatsApp Number" id="agent-whatsapp" name="whatsapp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agent-language">Language</label>
                                    <input type="text" class="form-control" placeholder="Enter Language" id="agent-language" name="language" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agent-address">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address" id="agent-address" name="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="agent-agency">Agency</label>
                                    <select class="form-control" id="agent-agency" name="agency_id" required>
                                        @foreach($agencies as $agency)
                                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                        @endforeach
                                    </select>
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
    function openModal(agent = null) {
        const modalTitle = document.getElementById('modal-title');
        const form = document.getElementById('agent-form');
        const userNameInput = document.getElementById('user-name');
        const userEmailInput = document.getElementById('user-email');
        const userPasswordInput = document.getElementById('user-password');
        const positionInput = document.getElementById('agent-position');
        const mobileNumberInput = document.getElementById('agent-mobile-number');
        const whatsappInput = document.getElementById('agent-whatsapp');
        const languageInput = document.getElementById('agent-language');
        const addressInput = document.getElementById('agent-address');
        const agencyInput = document.getElementById('agent-agency');

        // Reset the form
        form.reset();
        const methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) {
            methodInput.remove();
        }

        if (agent) {
            modalTitle.textContent = 'Edit Agent';
            form.action = `/agents/${agent.id}`;
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = '_method';
            input.value = 'PUT';
            form.appendChild(input);

            userNameInput.value = agent.user.name;
            userEmailInput.value = agent.user.email;
            userPasswordInput.removeAttribute('required');
            userPasswordInput.value = '';

            positionInput.value = agent.position;
            mobileNumberInput.value = agent.phone;
            whatsappInput.value = agent.whatsapp;
            languageInput.value = agent.language;
            addressInput.value = agent.address;
            agencyInput.value = agent.agency_id;
        } else {
            modalTitle.textContent = 'Add New Agent';
            form.action = '{{ route("agents.store") }}';
            userPasswordInput.setAttribute('required', 'required');
            userPasswordInput.value = '';
        }

        const modal = new bootstrap.Modal(document.querySelector('.agent-modal'));
        modal.show();
    }
</script>

@endpush
