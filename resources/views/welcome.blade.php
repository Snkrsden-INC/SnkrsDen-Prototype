@extends('layouts.main')
@section('content')
<body class="skin-light">
<div class="jumbotron card card-image" style="background-image: url(https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
    <div class="text-white text-center py-5 px-4">
        <div>
            <h2 class="card-title h1-responsive pt-3 mb-5 font-bold">
                <strong>SnkrsDen </strong>
            </h2>
            <h3 class="mx-5 mb-5">
                Sale, Buy & Trade Your Favorite Kicks!
            </h3>
            <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i>View Store</a>
            <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i>Check Out Our Blog</a>
        </div>
    </div>
</div>
<main>
    <div class="container">

        <!--Section: Block Content-->
        <section>

            <h4 class="text-center my-5">
                <strong>
                    Our Blog
                </strong>
            </h4>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom brighten z-depth-2 rounded">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(1).jpg"
                                 alt="Sample">
                            <a href="#!" class="text-white">
                                <div class="mask card-mask-color">
                                    <div class="d-flex align-items-end h-100 p-3">
                                        <h5 class="mb-0">Dresses</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom brighten z-depth-2 rounded">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(2).jpg"
                                 alt="Sample">
                            <a href="#!" class="text-white">
                                <div class="mask card-mask-color">
                                    <div class="d-flex align-items-end h-100 p-3">
                                        <h5 class="mb-0">Shirts</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom brighten z-depth-2 rounded">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(3).jpg"
                                 alt="Sample">
                            <a href="#!" class="text-white">
                                <div class="mask card-mask-color">
                                    <div class="d-flex align-items-end h-100 p-3">
                                        <h5 class="mb-0">Jeans</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom brighten z-depth-2 rounded">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(4).jpg"
                                 alt="Sample">
                            <a href="#!" class="text-white">
                                <div class="mask card-mask-color">
                                    <div class="d-flex align-items-end h-100 p-3">
                                        <h5 class="mb-0">Shoes</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom brighten z-depth-2 rounded">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(5).jpg"
                                 alt="Sample">
                            <a href="#!" class="text-white">
                                <div class="mask card-mask-color">
                                    <div class="d-flex align-items-end h-100 p-3">
                                        <h5 class="mb-0">Accessories</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom brighten z-depth-2 rounded">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(6).jpg"
                                 alt="Sample">
                            <a href="#!" class="text-white">
                                <div class="mask card-mask-color">
                                    <div class="d-flex align-items-end h-100 p-3">
                                        <h5 class="mb-0">Jewelry</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Block Content-->

        <!--Section: Block Content-->
        <section>

            <h4 class="text-center mt-4 mb-5"><strong>Bestsellers</strong></h4>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="{{ asset('img/prop/DSC00179.jpg') }}" alt="Sample">
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="{{ asset('img/prop/DSC00179.jpg') }}">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Jordans</h5>
                            <p class="mb-2 text-muted text-uppercase small">Sneakers</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="mr-1"><strong class="text-success">$50,000</strong></span></p>
                            <button type="button" class="btn btn-warning btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                            <h4 class="mb-0"><span class="badge badge-dark badge-pill badge-news">Sold out</span></h4>
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Red hoodie</h5>
                            <p class="mb-2 text-muted text-uppercase small">Hoodies</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="far fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="mr-1"><strong>$35.99</strong></span></p>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg" alt="Sample">
                            <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Grey sweater</h5>
                            <p class="mb-2 text-muted text-uppercase small">Sweaters</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="text-danger mr-1"><strong>$21.99</strong></span><span
                                    class="text-grey"><strong><s>$36.99</s></strong></span></p>
                            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Block Content-->

        <!--Section: Block Content-->
        <section>

            <h4 class="text-center mt-4 mb-5"><strong>New products</strong></h4>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Black denim jacket</h5>
                            <p class="mb-2 text-muted text-uppercase small">Jackets</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="mr-1"><strong>$99.99</strong></span></p>
                            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg" alt="Sample">
                            <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Grey sweater</h5>
                            <p class="mb-2 text-muted text-uppercase small">Sweaters</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="text-danger mr-1"><strong>$21.99</strong></span><span
                                    class="text-grey"><strong><s>$36.99</s></strong></span></p>
                            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Blue denim shirt</h5>
                            <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="mr-1"><strong>$17.99</strong></span></p>
                            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Block Content-->
    </div>
</main>


@endsection
