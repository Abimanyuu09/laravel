 <!-- Start Top Nav -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
     <div class="container text-light">
         <div class="w-100 d-flex justify-content-between">
             <div>
                 <i class="fa fa-envelope mx-2"></i>
                 <a class="navbar-sm-brand text-light text-decoration-none"
                     href="mailto:info@company.com">info@company.com</a>
                 <i class="fa fa-phone mx-2"></i>
                 <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
             </div>
             <div>
                 <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i
                         class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                 <a class="text-light" href="https://www.instagram.com/" target="_blank"><i
                         class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                 <a class="text-light" href="https://twitter.com/" target="_blank"><i
                         class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                 <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i
                         class="fab fa-linkedin fa-sm fa-fw"></i></a>
             </div>
         </div>
     </div>
 </nav>
 <!-- Close Top Nav -->


 <!-- Header -->
 <nav class="navbar navbar-expand-lg navbar-light shadow">
     <div class="container d-flex justify-content-between align-items-center">

         <p class="navbar-brand text-success logo h1 align-self-center">
             Popo Store
         </p>
         <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
             data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between d-none"
             id="templatemo_main_nav">
             <div class="flex-fill">
                 <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                     <li class="nav-item ">
                         <a class="nav-link {{ Request::is('home') ? 'fw-bold' : '' }}" href="/home">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ Request::is('about') ? 'fw-bold' : '' }}" href="/about">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ Request::is('shop') ? 'fw-bold' : '' }}" href="/shop">Shop</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ Request::is('contact') ? 'fw-bold' : '' }}" href="/contact">Contact</a>
                     </li>
                     @can('penjual')
                         <li class="nav-item ">
                             <a
                                 class="nav-link {{ Request::is('dashboard') ? 'fw-bold' : '' }}"href="/dashboard">Dashboard</a>
                         </li>
                     @endcan
                 </ul>
             </div>
             <div class="navbar align-self-center d-flex">
                 <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                     <div class="input-group">
                         <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                         <div class="input-group-text">
                             <i class="fa fa-fw fa-search"></i>
                         </div>
                     </div>
                 </div>
                 <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                     data-bs-target="#templatemo_search">
                     <i class="fa fa-fw fa-search text-dark mr-2"></i>
                 </a>
                 @auth
                     <button class="btn nav-icon position-relative text-decoration-none dropdown-toggle"
                         id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="fa fa-fw fa-user text-dark"></i>
                         <i class="fw-bold ms-2">{{ auth()->user()->name }}</i>
                     </button>
                     <ul class="dropdown-menu ms-4" aria-labelledby="dropdownMenuButton1">
                         <li class="nav-item">
                             <form action="/logout" method="post">
                                 @csrf
                                 <button type="submit" class="dropdown-item">Logout <i
                                         class="bi bi-box-arrow-right"></i></button>
                             </form>
                         </li>
                         <li>
                             <i></i>
                         </li>
                     </ul>
                 @else
                     <button class="btn nav-icon position-relative text-decoration-none dropdown-toggle"
                         id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="fa fa-fw fa-user text-dark mr-3"></i>
                     </button>
                     <ul class="dropdown-menu ms-4" aria-labelledby="dropdownMenuButton1">
                         <li class="nav-item">
                             <a class="dropdown-item nav-link" href="/login"><i class="bi bi-box-arrow-right"></i>
                                 Login</a>
                         </li>
                     </ul>
                 @endauth

             </div>
         </div>

     </div>
 </nav>
 <!-- Close Header -->
