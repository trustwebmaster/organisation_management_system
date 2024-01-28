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

        </section>

    </div>

@endsection
