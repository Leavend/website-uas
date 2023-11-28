@extends('layoutAuth.app')

@section('content')
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header justify-content-center">
            <h3 class="fw-light my-4">{{ $Title2 }}</h3>
        </div>
        <div class="card-body">

            <!-- Alert-->
            @if(session('error'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <h5 class="alert-heading">Alert !</h5>
                {{ session('error') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- Login form-->
            <form method="POST" action="{{ route('auth.login') }}">
                @csrf <!-- CSRF Protection -->

                <!-- Form Group (nim )-->
                <div class="mb-3">
                    <label class="small mb-1" for="inputNim">NIM</label>
                    <input class="form-control" id="inputNim" type="text" placeholder="Enter your nim" name="nim"
                        required />
                </div>

                <!-- Form Group (password)-->
                <div class="mb-3">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input class="form-control" id="inputPassword" type="password" placeholder="Enter password"
                        name="password" required />
                </div>

                <!-- Form Group (login box)-->
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary lift lift-sm">Login</button>
                </div>

            </form>
        </div>

    </div>
@endsection
