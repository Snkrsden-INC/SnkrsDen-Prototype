@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-warning text-center">
                            My Dashboard
                        </div>
                            <div class="list-group">
                                <a href="#!" class="list-group-item list-group-item-action">My Products</a>
                                <a href="" class="list-group-item list-group-item-action">List A Product</a>
                                <a href="#!" class="list-group-item list-group-item-action">Profile</a>
                                <a href="#!" class="list-group-item list-group-item-action">Following</a>
                            </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <div class="col-md-9">
            <!-- Card -->
            <div class="card card-cascade wider">

                <!-- Card image -->
                <div class="view view-cascade gradient-card-header peach-gradient">

                    <!-- Title -->
                    <h2 class="card-header-title mb-3">
                        Welcome, {{ Auth::user()->name }}
                    </h2>
                    <!-- Text -->
                    <p class="mb-0">
                        <i class="fas fa-calendar mr-2"></i>
                        {{ \Carbon\Carbon::now()->toRfc850String() }}
                    </p>

                </div>
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                    <div class="row d-flex justify-content-around">
                        <a href="" class="btn btn-warning">Create Post</a>
                        <a href="" class="btn btn-outline-warning">Create Product Listing</a>
                    </div>
                </div>
                <!-- Card content -->

            </div>
        </div>
    </div>
</div>
@endsection
