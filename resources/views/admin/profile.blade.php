@extends('layoutDashboard.app')

@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Account Settings - Profile
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{ route('admin.profile') }}">Profile</a>
        </nav>
        <!-- Account page navigation ends-->
        <hr class="mt-0 mb-4" />
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                {{-- <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="{{ Auth::user()->image ?? asset('assets/img/illustrations/profiles/profile-1.png') }}"
                            alt="{{ Auth::user()->name }}" />
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div> --}}
                
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">

                        @php
                            $userImage = Auth::user()->image ?? null; // Get user image or set to null if not available
                            $imagePath = asset('storage/uploads/' . $userImage);
                            $defaultImagePath = asset('assets/img/illustrations/profiles/profile-1.png');

                            // Check if the image path is valid
                            $imageExists = $userImage !== null && file_exists(public_path('storage/uploads/' . $userImage));
                        @endphp

                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="{{ $imageExists ? $imagePath : $defaultImagePath }}" alt="{{ Auth::user()->name }}" />

                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 10 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button" onclick="toggleUploadForm()">Upload new
                            image</button>

                        <!-- Form for uploading image (initially hidden) -->
                        <form action="{{ route('admin.profile.upload') }}" method="POST" enctype="multipart/form-data"
                            id="uploadForm" style="display: none;">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="exampleFormControlInput0">Profile Picture</label>
                                <input class="form-control form-control-solid mb-2 mt-2" type="file"
                                    name="profile_image">
                                <button class="btn btn-primary" type="submit">Upload Image</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form action="{{ route('admin.profile.update') }}" method="POST">
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
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email"
                                    value="{{ $adminProfile->email }}" placeholder="nim@student.itk.ac.id" name="email" />
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
                                <input class="form-control form-control-solid" id="exampleFormControlInput2" type="text"
                                    value="{{ $adminProfile->username }}" placeholder="username" name="username" />
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
                                <input class="form-control form-control-solid" id="exampleFormControlInput3" type="text"
                                    value="{{ $adminProfile->name }}" placeholder="name" name="name" />
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
                                <input class="form-control form-control-solid" id="exampleFormControlInput4" type="text"
                                    value="{{ $adminProfile->nim }}" placeholder="nim" name="nim" />
                            </div>

                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">Save changes</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
