@extends('layoutDashboard.app')

@section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                            Forms Add Cafe
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
                                style="color: red; font-size: 18px">Important</span> Data Cafe</div>
                        <div class="card-body">
                            <!-- Component Preview-->
                            <div class="sbp-preview">
                                <div class="sbp-preview-content">

                                    <form id="cafeForm" action="{{ route('cafe.insert') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <!-- Form Group untuk nama -->
                                        <div class="mb-3">
                                            <label for="cafeName">Name</label>
                                            @error('name')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="coffee"></i>
                                                </span>
                                                <input class="form-control ps-0" id="cafeName" type="text"
                                                    placeholder="Name" name="name" required />
                                            </div>
                                        </div>

                                        <!-- Form Group untuk deskripsi kafe -->
                                        <div class="mb-3">
                                            <label for="cafeDescription">Description</label>
                                            @error('description')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="align-left"></i>
                                                </span>
                                                <textarea class="form-control ps-0" id="cafeDescription" placeholder="Description" name="description" required></textarea>
                                            </div>
                                        </div>

                                        <!-- Form Group untuk nomor telepon -->
                                        <div class="mb-3">
                                            <label for="cafePhoneNumber">Phone Number</label>
                                            @error('number_phone')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="phone"></i>
                                                </span>
                                                <input class="form-control" id="cafePhoneNumber" type="text"
                                                    placeholder="Phone Number" name="number_phone" required />
                                            </div>
                                        </div>

                                        <!-- Form Group untuk lokasi -->
                                        <div class="mb-3">
                                            <label for="cafeLocation">Location</label>
                                            @error('location')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="map-pin"></i>
                                                </span>
                                                <input class="form-control" id="cafeLocation" type="text"
                                                    placeholder="Location" name="location" required />
                                            </div>
                                        </div>

                                        <!-- Form Group untuk URL Maps -->
                                        <div class="mb-3">
                                            <label for="cafeMaps">Map Link</label>
                                            @error('url_link_maps')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="map"></i>
                                                </span>
                                                <input class="form-control" id="cafeMaps" type="text"
                                                    placeholder="https://maps.google.com/your_location" name="url_link_maps"
                                                    required />
                                            </div>
                                        </div>

                                        <!-- Form Group untuk kisaran harga -->
                                        <div class="mb-3">
                                            <label for="cafePrice">Price Range (ex. 25.000 - 30.000)</label>
                                            @error('range_rate_price')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="dollar-sign"></i>
                                                </span>
                                                <input class="form-control" id="cafePrice" type="text"
                                                    placeholder="Price Range" name="range_rate_price" required />
                                            </div>
                                        </div>

                                        <!-- Form Group untuk multiple image upload -->
                                        <div class="mb-3">
                                            <label for="cafeImages">Images Cafe (Can 2 Images or More)</label>
                                            @error('images')
                                                <div role="alert" style="padding: 5px">
                                                    <span class="small-text" style="color: red; font-size: 12px">Alert!
                                                        {{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="input-group input-group-joined">
                                                <span class="input-group-text">
                                                    <i data-feather="image"></i>
                                                </span>
                                                <input type="file" class="form-control" id="cafeImages"
                                                    name="images[]" multiple required />
                                            </div>
                                        </div>
                                        <!-- ... (form group untuk data lainnya) -->
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
                                    <button class="btn btn-primary lift" onclick="submitFormCafe()">Add Data Cafe</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
