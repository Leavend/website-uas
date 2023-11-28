@extends('layoutDashboard.app')

@section('content')

    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                            Forms Add Admin
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

                                    <form id="adminForm" action="{{ route('admin.insert') }}" method="POST"
                                        enctype="multipart/form-data">
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
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="mail"></i>
                                                </span>
                                                <input class="form-control ps-0" id="exampleFormControlInput1"
                                                    type="email" placeholder="nim@student.itk.ac.id" name="email"
                                                    required />
                                            </div>
                                        </div>

                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2">Password</label>
                                            @error('password')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="lock"></i>
                                                </span>
                                                <input class="form-control ps-0" id="exampleFormControlInput2"
                                                    type="password" placeholder="password" name="password" required />
                                            </div>
                                        </div>

                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3">Username</label>
                                            @error('username')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="user"></i>
                                                </span>
                                                <input class="form-control ps-0" id="exampleFormControlInput3"
                                                    type="text" placeholder="username" name="username" required />
                                            </div>
                                        </div>

                                        <!-- Form Group (name)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput4">Name</label>
                                            @error('name')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="edit-2"></i>
                                                </span>
                                                <input class="form-control ps-0" id="exampleFormControlInput4"
                                                    type="text" placeholder="name" name="name" required />
                                            </div>
                                        </div>

                                        <!-- Form Group (nim)-->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput5">Nim</label>
                                            @error('nim')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </span>
                                                <input class="form-control ps-0" id="exampleFormControlInput5"
                                                    type="text" placeholder="nim" name="nim" required />
                                            </div>
                                        </div>

                                        <!-- Form Group (image upload) -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput6">Profile Image</label>
                                            @error('image')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <input type="file" class="form-control" id="exampleFormControlInput6"
                                                name="image" required />
                                        </div>

                                        <!-- Form Group (instagram link) -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput7">Instagram Link</label>
                                            @error('ig')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="instagram"></i>
                                                </span>
                                                <input class="form-control ps-0" id="exampleFormControlInput7"
                                                    type="text" placeholder="https://www.instagram.com/your_usernames"
                                                    name="ig" required />
                                            </div>
                                        </div>

                                        <!-- Form Group (linkedin link) -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput8">LinkedIn Link</label>
                                            @error('ln')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="linkedin"></i>
                                                </span>
                                                <input class="form-control ps-0" id="exampleFormControlInput8"
                                                    type="text" placeholder="https://www.linkedin.com/in/your_profile"
                                                    name="ln" required />
                                            </div>
                                        </div>

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
                                <li class="nav-item">
                                    <button class="btn btn-primary lift" onclick="submitFormAdmin()">Add Data Admin</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
