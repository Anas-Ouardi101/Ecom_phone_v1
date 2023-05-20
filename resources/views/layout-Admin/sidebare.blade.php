
    <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route("admin.index")}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">PhoneX</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{Auth::user()->avatar}}" alt="" style="width: 40px; height: 40px;">
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
