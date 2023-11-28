@extends('layoutDashboard.app')

@section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="edit-2"></i></div>
                            Forms Edit Admin
                        </h1>
                        <div class="page-header-subtitle"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-lg-9">

                <!-- Solid Form Controls-->
                <div id="solid">
                    <div class="card mb-4">
                        <div class="card-header"><span class="small-text"
                                style="color: red; font-size: 18px">Important</span> Data Admin</div>
                        <div class="card-body">
                            <!-- Component Preview-->
                            <div class="sbp-preview">
                                <div class="sbp-preview-content">

                                    <form id="myForm" action="" method="POST">
                                        @csrf
                                        <!-- Form Group (email)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1">Email address</label>
                                            @error('email')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <input class="form-control form-control-solid" id="exampleFormControlInput1"
                                                type="email" value="{{ $User->email }}"
                                                placeholder="nim@student.itk.ac.id" name="email" required />
                                        </div>


                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2">Username</label>
                                            @error('username')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <input class="form-control form-control-solid" id="exampleFormControlInput2"
                                                type="text" value="{{ $User->username }}" placeholder="username"
                                                name="username" required />
                                        </div>

                                        <!-- Form Group (name)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3">Name</label>
                                            @error('name')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <input class="form-control form-control-solid" id="exampleFormControlInput3"
                                                type="text" value="{{ $User->name }}" placeholder="name" name="name"
                                                required />
                                        </div>

                                        <!-- Form Group (nim)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput4">Nim</label>
                                            @error('nim')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <input class="form-control form-control-solid" id="exampleFormControlInput4"
                                                type="text" value="{{ $User->nim }}" placeholder="nim" name="nim"
                                                required />
                                        </div>

                                        <!-- Form Group (password)-->
                                        {{-- <div class="mb-3">
                                            <label for="exampleFormControlInput5">Password</label>
                                            @error('password')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <input class="form-control form-control-solid" id="exampleFormControlInput5"
                                                type="password" placeholder="password" name="password" />
                                        </div> --}}

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sticky Navigation-->
            <div class="col-lg-3">
                <div class="nav-sticky">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav flex-column" id="stickyNav">
                                <button class="btn btn-primary lift" onclick="submitForm()">Edit Data Admin</button>
                                {{-- <li class="nav-item"><a class="nav-link" onclick="submitForm()">Edit Data</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
