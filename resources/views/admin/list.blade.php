@extends('layoutDashboard.app')

@section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            Tables Data Admin
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card mb-4">
            <div class="card-header"></div>
            <div class="card-body">

                @if (session('success'))
                    <!-- Trigger toast using JavaScript -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var toastTrigger = document.getElementById('toastBasicTrigger');
                            var toast = new bootstrap.Toast(document.getElementById('toastBasic'));
                            toast.show();
                        });
                    </script>
                    <!-- Toast container -->
                    <div style="position: absolute; bottom: 1rem; right: 1rem;">
                        <!-- Toast -->
                        <div class="toast" id="toastBasic" role="alert" aria-live="assertive" aria-atomic="true"
                            data-bs-delay="3000">
                            <div class="toast-header bg-primary text-white">
                                <i data-feather="alert-circle"></i>
                                <strong class="mr-auto mx-1">Attention !</strong>
                                <small class="text-white-50 ml-2">just now</small>
                                <button class="ml-2 mb-1 btn-close" type="button" data-bs-dismiss="toast"
                                    aria-label="Close">
                                </button>
                            </div>
                            <div class="toast-body">{{ session('success') }}</div>
                        </div>
                    </div>
                @endif

                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Nim</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Nim</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($DataAdmin as $x)
                            <tr>
                                <td>{{ $x->username }}</td>
                                <td>{{ $x->name }}</td>
                                <td>{{ $x->email }}</td>
                                <td>{{ $x->nim }}</td>
                                <td>
                                    <a href="{{ url('admin/admin-edit/' . $x->id) }}">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" data-action="edit">
                                            <i data-feather="edit-2"></i>
                                        </button>
                                    </a>

                                    <a href="{{ url('admin/admin-delete/' . $x->id) }}">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"
                                            data-action="delete">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </a>

                                    <button class="btn-datatable btn-icon btn-transparent-dark" data-action="view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal{{ $x->id }}"
                                        data-target="#exampleModal" data-admin-id="{{ $x->id }}">
                                        <i data-feather="eye"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Modal Detail Admin -->
    @foreach ($DataAdmin as $x)
        <div class="modal fade" id="exampleModal{{ $x->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">DETAIL DATA ADMIN</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <dl class="row">
                            <dt class="col-sm-4">ID:</dt>
                            <dd class="col-sm-8">{{ $x->id }}</dd>
                            <dt class="col-sm-4">Username:</dt>
                            <dd class="col-sm-8">{{ $x->username }}</dd>
                            <dt class="col-sm-4">Name:</dt>
                            <dd class="col-sm-8">{{ $x->name }}</dd>
                            <dt class="col-sm-4">Email:</dt>
                            <dd class="col-sm-8">{{ $x->email }}</dd>
                            <dt class="col-sm-4">NIM:</dt>
                            <dd class="col-sm-8">{{ $x->nim }}</dd>
                            <dt class="col-sm-4">Created At:</dt>
                            <dd class="col-sm-8">{{ $x->created_at }}</dd>
                        </dl>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
@endsection
