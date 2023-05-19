<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PhoneX</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset("../../public/img/favicon.ico")}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset("lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">

    {{-- Icon title --}}
    <link rel="icon" type="image/png" href="https://www.flaticon.com/free-icons/cross-wrench"/>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->


        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route("admin.index")}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">PhoneX</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset("img/300-15.jpg")}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboards" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>tableau de bord</a>
                    <!-- Start Commande layout-->
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-bag-shopping me-2"></i>Les Commandes</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">Tout les commande</a>
                            <a href="" class="dropdown-item">Commandes Livrées</a>
                            <a href="" class="dropdown-item">Archive Des Commandes</a>
                        </div>
                    </div>
                    <!-- End Orders layout-->

                    <!-- Start Products layout-->
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-sharp fa-solid fa-box-open me-2"></i>Les Produit</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">List Des Produits</a>
                            <a href="" class="dropdown-item">Produits Supprimés</a>
                        </div>
                    </div>
                    <!-- End Products layout-->

                    <!-- Start Clients layout-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-sharp fa-solid fa-user-group me-2"></i>Clients</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">List Des Client</a>
                            <a href="" class="dropdown-item">liste noire de client</a>
                        </div>
                    </div>
                    <!-- Start Clients layout-->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset("img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset("img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset("img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset("img/300-15.jpg")}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                            </a>
                                
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">commandes</p>
                                <h6 class="mb-0" style="text-align: center">124</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa-sharp fa-solid fa-box-open fa-2x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Produits</p>
                                <h6 class="mb-0" style="text-align: center">15</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">

                            <i class="bi bi-people-fill fa-2x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Clients</p>
                                <h6 class="mb-0" style="text-align: center">123</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa-solid fa-truck-ramp-box fa-2x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Livré</p>
                                <h6 class="mb-0" style="text-align: center">34</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4" >
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6" style="width: 1200px">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Ventes</h6>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
{{--                    <div class="col-sm-12 col-xl-6">--}}
{{--                        <div class="bg-light text-center rounded p-4">--}}
{{--                            <div class="d-flex align-items-center justify-content-between mb-4">--}}
{{--                                <h6 class="mb-0">Salse & Revenue</h6>--}}
{{--                                <a href="">Show All</a>--}}
{{--                            </div>--}}
{{--                            <canvas id="salse-revenue"></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Commande récente</h6>
                        <a href="">Afficher tout</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Date</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01 Jan 2045</td>
                                    <td>Mia Jorden</td>
                                    <td>5700 DH</td>
                                    <td>impayé</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>01 Jan 2045</td>
                                    <td>Jhon Doe</td>
                                    <td>1523 DH</td>
                                    <td>Payé</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
{{--                                    <td><input class="form-check-input" type="checkbox"></td>--}}
                                    <td>01 Jan 2045</td>
                                    <td>Felex Jhone</td>
                                    <td>5000 DH</td>
                                    <td>Payé</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
{{--                                    <td><input class="form-check-input" type="checkbox"></td>--}}
                                    <td>01 Jan 2045</td>
                                    <td>Sara James</td>
                                    <td>10500 DH</td>
                                    <td>impayé</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End Anas-Ouardi101 mo374 -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4" >
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4" style="width: 1090px">
                        <div class="h-100 bg-light rounded p-4"  >
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Afficher tout</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset("img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset("img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset("img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="col-sm-12 col-md-6 col-xl-4">--}}
{{--                        <div class="h-100 bg-light rounded p-4">--}}
{{--                            <div class="d-flex align-items-center justify-content-between mb-4">--}}
{{--                                <h6 class="mb-0">Calender</h6>--}}
{{--                                <a href="">Show All</a>--}}
{{--                            </div>--}}
{{--                            <div id="calender"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-sm-12 col-md-6 col-xl-4">
{{--                        <div class="h-100 bg-light rounded p-4">--}}
{{--                            <div class="d-flex align-items-center justify-content-between mb-4">--}}
{{--                                <h6 class="mb-0">To Do List</h6>--}}
{{--                                <a href="">Show All</a>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex mb-2">--}}
{{--                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">--}}
{{--                                <button type="button" class="btn btn-primary ms-2">Add</button>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center border-bottom py-2">--}}
{{--                                <input class="form-check-input m-0" type="checkbox">--}}
{{--                                <div class="w-100 ms-3">--}}
{{--                                    <div class="d-flex w-100 align-items-center justify-content-between">--}}
{{--                                        <span>Short task goes here...</span>--}}
{{--                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center border-bottom py-2">--}}
{{--                                <input class="form-check-input m-0" type="checkbox">--}}
{{--                                <div class="w-100 ms-3">--}}
{{--                                    <div class="d-flex w-100 align-items-center justify-content-between">--}}
{{--                                        <span>Short task goes here...</span>--}}
{{--                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center border-bottom py-2">--}}
{{--                                <input class="form-check-input m-0" type="checkbox" checked>--}}
{{--                                <div class="w-100 ms-3">--}}
{{--                                    <div class="d-flex w-100 align-items-center justify-content-between">--}}
{{--                                        <span><del>Short task goes here...</del></span>--}}
{{--                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center border-bottom py-2">--}}
{{--                                <input class="form-check-input m-0" type="checkbox">--}}
{{--                                <div class="w-100 ms-3">--}}
{{--                                    <div class="d-flex w-100 align-items-center justify-content-between">--}}
{{--                                        <span>Short task goes here...</span>--}}
{{--                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center pt-2">--}}
{{--                                <input class="form-check-input m-0" type="checkbox">--}}
{{--                                <div class="w-100 ms-3">--}}
{{--                                    <div class="d-flex w-100 align-items-center justify-content-between">--}}
{{--                                        <span>Short task goes here...</span>--}}
{{--                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">PhoneX</a>, Tous Droits Réservés.
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("lib/chart/chart.min.js")}}"></script>
    <script src="{{asset("lib/easing/easing.min.js")}}"></script>
    <script src="{{asset("lib/waypoints/waypoints.min.js")}}"></script>
    <script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("lib/tempusdominus/js/moment.min.js")}}"></script>
    <script src="{{asset("lib/tempusdominus/js/moment-timezone.min.js")}}"></script>
    <script src="{{asset("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    </div>
    <!-- Template Javascript -->
    <script src="{{asset("js/main.js")}}"></script>
</body>

</html>
