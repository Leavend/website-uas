<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="CafeInformationWebBalikpapan" />
    <meta name="author" content="AmandaZanetaHakim" />
    <title>{{ !empty($Title) ? $Title : '' }} - CafeCityGuide</title>

    <!-- css unique -->
    <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <link rel="icon" type="image/x-icon" href="{{ asset('assetsFront/img/logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">

    <!-- Sidenav -->
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
        id="sidenavAccordion">

        <!-- Sidenav Toggle Button-->
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i
                data-feather="menu"></i></button>

        <!-- Navbar Brand-->
        <!-- * * Tip * * You can use text or an image for your navbar brand.-->
        <!-- * * * * * * When using an image, we recommend the SVG format.-->
        <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="#">Dashboard Admin CafeCityGuide</a>


        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">

            @php
                $userImage = Auth::user()->image ?? null; // Get user image or set to null if not available
                $imagePath = asset('storage/uploads/' . $userImage);
                $defaultImagePath = asset('assets/img/illustrations/profiles/profile-1.png');

                // Check if the image path is valid
                $imageExists = $userImage !== null && file_exists(public_path('storage/uploads/' . $userImage));
            @endphp

            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="{{ $imageExists ? $imagePath : $defaultImagePath }}" /></a>

                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">

                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="{{ $imageExists ? $imagePath : $defaultImagePath }}" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{ Auth::user()->username }}</div>
                            <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                        </div>
                    </h6>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Account
                    </a>

                    <a class="dropdown-item" href="{{ route('auth.logout') }}">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>

                </div>
            </li>

        </ul>
    </nav>
    <!-- End Sidebar -->

    <!-- Header -->
    <div id="layoutSidenav">

        <!-- Sidebar -->
        <div id="layoutSidenav_nav">

            <nav class="sidenav shadow-right sidenav-light">

                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">

                        <!-- Sidenav Heading (App Views)-->
                        <div class="sidenav-menu-heading">App Views</div>

                        <!-- Sidenav Accordion (Pages)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="nav-link-icon"><i data-feather="users"></i></div>
                            Admin
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.list') }}">List</a>
                                <a class="nav-link" href="{{ route('admin.add') }}">Add</a>
                            </nav>
                        </div>

                        <!-- Sidenav Accordion (Cafes)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                            <div class="nav-link-icon"><i data-feather="coffee"></i></div>
                            Cafes
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('cafe.list') }}">List</a>
                                <a class="nav-link" href="{{ route('cafe.add') }}">Add</a>
                            </nav>
                        </div>

                    </div>
                </div>

                <!-- Sidenav Footer-->
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
                    </div>
                </div>

            </nav>
        </div>

        <!-- Main content-->
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>

            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">CafeCityGuide 2023</div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/prism-core.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/autoloader/prism-autoloader.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/litepicker.js') }}"></script>
    <script src="{{ asset('js/datatables/datatables-simple-demo.js') }}"></script>

</body>

</html>
