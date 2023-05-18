@extends('layouts.main')

@section('container')
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q"
                        placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/ld.1.bg.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Helo,</b> Beauty!</h1>
                                <h3 class="h2">The Iconic Lady Dior Black</h3>
                                <p>
                                   A symbol, Timeless, and a legend, The Lady Dior handbag appeared for the first time on the arm of Lady Diana and has since had an
                                   extraordinary destiny. <a rel="sponsored" class="text-success"
                                        target="_blank"></a>
                                    <a rel="sponsored" class="text-success"
                                        target="_blank"></a>
                                    <a rel="sponsored" class="text-success" 
                                        target="_blank"></a> 
                                    <a rel="sponsored" class="text-success" target="_blank">
                                        </a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/h.b.1.creme.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Our Hermes</h1>
                                <h3 class="h2">Hermes Birkin</h3>
                                <p>
                                The Birkin is available in a rare heritage leather with unique character. 
                                Entirely vegetable-tanned natural cowhide has an exceptionally transparent finish that gains a patina and becomes even more beautiful over time. 
                                Smooth or grained, this leather in a natural shade emphasizes the Birkin’s clean lines and will appeal to connoisseurs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/c.1.fb.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Chanel flap bag</h1>
                                <h3 class="h2">Classic Handbag </h3>
                                <p>
                                Created by Karl Lagerfeld upon his arrival in 1983,
                                the 11.12 handbag reinterprets the iconic 2.55 handbag. In gold and silver tone metal 
                                interlaced with leather. Inimitable and timeless, 
                                the seal of CHANEL. An internal leather flap with a double C
                                overstitched onto the fold reveal the pockets.. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start secretly working -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Secretly working with:</h1>
                <p>
                    A brand we work with.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/logo.dior.png"
                        class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">DIOR</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/logo.hermes.png"
                        class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">HERMES</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/logo.chanel.png"
                        class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">CHANEL</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/logo.prada.png"
                        class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">PRADA</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/logo.ysl.png"
                        class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">SAINT LAURENT</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">OUR BEST SELLER!!</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="/shop-single">
                            <img src="./assets/img/d.1.s.l.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">Rp. 68.000.000,-</li>
                            </ul>
                            <a href="/shop-single" class="h2 text-decoration-none text-dark">Dior Saddle</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia
                                deserunt.
                            </p>
                            <p class="text-muted">Reviews (78)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/h.1.c.r.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">Rp. 270.000.000,-</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Hermes Constance</a>
                            <p class="card-text">
                                Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo
                                ullamcorper.
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/p.1.re.b.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">Rp. 30.000.000,-</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Prada re-edition 2005
                                </a>
                            <p class="card-text">
                                Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et
                                scelerisque ipsum lobortis nec.
                            </p>
                            <p class="text-muted">Reviews (50)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
