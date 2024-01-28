@extends('layouts.app')
@section('body')
    <div class="container-fluid">

        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Organisation Members</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Members</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">Add Member</h5>

                            <form action="{{ route('memberManagement.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="text"
                                                name="first_name"
                                                class="form-control"
                                                id="first_name"
                                                placeholder="Enter First Name"
                                                required
                                            />
                                            @error('first_name')
                                            <p class="text-danger small w-100">{{ $message }}</p>
                                            @enderror
                                            <label for="first_name">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="text"
                                                name="last_name"
                                                class="form-control"
                                                id="last_name"
                                                placeholder="Enter Last Name"
                                                required
                                            />
                                            @error('last_name')
                                            <p class="text-danger small w-100">{{ $message }}</p>
                                            @enderror
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="text"
                                                name="national_id"
                                                class="form-control"
                                                id="national_id"
                                                placeholder="Enter National ID"
                                                required
                                            />
                                            @error('national_id')
                                            <p class="text-danger small w-100">{{ $message }}</p>
                                            @enderror
                                            <label for="national_id">National ID</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control"
                                                id="email"
                                                placeholder="Email Address"
                                                required
                                            />
                                            @error('email')
                                            <p class="text-danger small w-100">{{ $message }}</p>
                                            @enderror
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="tel"
                                                name="phone_number"
                                                class="form-control"
                                                id="phone_number"
                                                placeholder="Phone Number"
                                                required
                                            />
                                            @error('phone_number')
                                            <p class="text-danger small w-100">{{ $message }}</p>
                                            @enderror
                                            <label for="phone_number">Phone Number</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="text"
                                                name="address"
                                                class="form-control"
                                                id="address"
                                                placeholder="Address"
                                                required
                                            />
                                            @error('address')
                                            <p class="text-danger small w-100">{{ $message }}</p>
                                            @enderror
                                            <label for="address">Address</label>
                                        </div>
                                    </div>




                                    <div class="col-12">
                                        <div class="d-md-flex align-items-center mt-3">

                                            <div class="ms-auto mt-3 mt-md-0">
                                                <button
                                                    type="submit"
                                                    class="btn btn-info font-medium rounded-pill px-4"
                                                >
                                                    <div class="d-flex align-items-center">
                                                        <i class="ti ti-send me-2 fs-4"></i>
                                                        Submit
                                                    </div>
                                                </button>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
