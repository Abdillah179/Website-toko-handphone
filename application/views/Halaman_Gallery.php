<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Link css  -->

    <link rel="stylesheet" href="<?= base_url()?>public/css/dashboard.css">
    <link rel="stylesheet" href="<?= base_url()?>public/css/lightbox.css">
    <link rel="stylesheet" href="<?= base_url()?>public/css/magnify.css">
    <link rel="stylesheet" href="<?= base_url()?>public/plugin/css/lightgallery.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" id="dark">

    <link rel="stylesheet" href="<?= base_url('public/darkmode/node_modules/bootstrap/dist/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('public/darkmode/node_modules/bootstrap-icons/font/bootstrap-icons.css')?>">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-2">ELECTRO <span>STORE</span></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>Home/index">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
            <!-- Divider
            <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-4">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand bg-dark topbar mb-4 static-top shadow" style="background-color: rgb(40, 39, 39);">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form action="" method="post"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search keyword"
                                aria-label="Search" aria-describedby="basic-addon2" name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit"></input>
                            </div>
                        </div>
                    </form>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->
                        
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small" style="color: rgb(201, 197, 197)";>Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url()?>Logout/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="<?= base_url()?>Halaman_Produk/DetailKeranjang"><i class="fa fa-shopping-cart" aria-hidden="true"><?= $this->cart->total_items();?></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar ms-3">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="switch">
                                    <label class="form-check-label" for="switch">Dark Mode</label>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="bi bi-filter-left fs-1"></i>
                                </button>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </nav>

                <!-- Gallery -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-5 mt-5">
                        <h1 class="h3 mb-0 text-gray-800">Gallery Product</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row me-2 ms-2" id="lightgallery">
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img2/acer r751.jpg">
                        <a href="<?= base_url()?>public/img2/acer r751.jpg">
                        <img src="<?= base_url()?>public/img2/acer r751.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto2.jpg">
                        <a href="<?= base_url()?>public/img/foto2.jpg">
                            <img src="<?= base_url()?>public/img/foto2.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto3.jpg">
                        <a href="<?= base_url()?>public/img/foto3.jpg">
                            <img src="<?= base_url()?>public/img/foto3.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto4.jpg">
                        <a href="<?= base_url()?>public/img/foto4.jpg">
                            <img src="<?= base_url()?>public/img/foto4.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto5.jpg">
                        <a href="<?= base_url()?>public/img/foto5.jpg">
                            <img src="<?= base_url()?>public/img/foto5.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto6.jpg">
                        <a href="<?= base_url()?>public/img/foto6.jpg">
                            <img src="<?= base_url()?>public/img/foto6.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-right" data-aos-duration="3000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto7.jpg">
                        <a href="<?= base_url()?>public/img/foto7.jpg">
                            <img src="<?= base_url()?>public/img/foto7.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto8.jpg">
                        <a href="<?= base_url()?>public/img/foto8.jpg">
                            <img src="<?= base_url()?>public/img/foto8.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto9.jpg">
                        <a href="<?= base_url()?>public/img/foto9.jpg">
                            <img src="<?= base_url()?>public/img/foto9.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto10.jpg">
                        <a href="<?= base_url()?>public/img/foto10.jpg">
                            <img src="<?= base_url()?>public/img/foto10.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto11.jpg">
                        <a href="<?= base_url()?>public/img/foto11.jpg">
                            <img src="<?= base_url()?>public/img/foto11.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-right" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto12.jpg">
                        <a href="<?= base_url()?>public/img/foto12.jpg">
                            <img src="<?= base_url()?>public/img/foto12.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto13.jpg">
                        <a href="<?= base_url()?>public/img/foto13.jpg">
                            <img src="<?= base_url()?>public/img/foto13.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-left" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto14.jpg">
                        <a href="<?= base_url()?>public/img/foto14.jpg">
                            <img src="<?= base_url()?>public/img/foto14.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto15.jpg">
                        <a href="<?= base_url()?>public/img/foto15.jpg">
                            <img src="<?= base_url()?>public/img/foto15.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto16.jpg">
                        <a href="<?= base_url()?>public/img/foto16.jpg">
                            <img src="<?= base_url()?>public/img/foto16.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto17.jpg">
                        <a href="<?= base_url()?>public/img/foto17.jpg">
                            <img src="<?= base_url()?>public/img/foto17.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-right" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto18.jpg">
                        <a href="<?= base_url()?>public/img/foto18.jpg">
                            <img src="<?= base_url()?>public/img/foto18.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto19.jpg">
                        <a href="<?= base_url()?>public/img/foto19.jpg">
                            <img src="<?= base_url()?>public/img/foto19.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto20.jpg">
                        <a href="<?= base_url()?>public/img/foto20.jpg">
                            <img src="<?= base_url()?>public/img/foto20.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto21.jpg">
                        <a href="<?= base_url()?>public/img/foto21.jpg">
                            <img src="<?= base_url()?>public/img/foto21.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto22.jpg">
                        <a href="<?= base_url()?>public/img/foto22.jpg">
                            <img src="<?= base_url()?>public/img/foto22.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto23.jpg">
                        <a href="<?= base_url()?>public/img/foto23.jpg">
                            <img src="<?= base_url()?>public/img/foto23.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto24.jpg">
                        <a href="<?= base_url()?>public/img/foto24.jpg">
                            <img src="<?= base_url()?>public/img/foto24.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto25.jpg">
                        <a href="<?= base_url()?>public/img/foto25.jpg">
                            <img src="<?= base_url()?>public/img/foto25.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto26.jpg">
                        <a href="<?= base_url()?>public/img/foto26.jpg">
                            <img src="<?= base_url()?>public/img/foto26.jpg" class="img-thumbnail" style="border-radius: 2rem; height:230px; width:400px" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto27.jpg">
                        <a href="<?= base_url()?>public/img/foto27.jpg">
                            <img src="<?= base_url()?>public/img/foto27.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto28.jpg">
                        <a href="<?= base_url()?>public/img/foto28.jpg">
                            <img src="<?= base_url()?>public/img/foto28.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto29.jpg">
                        <a href="<?= base_url()?>public/img/foto29.jpg">
                            <img src="<?= base_url()?>public/img/foto29.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto30.jpg">
                        <a href="<?= base_url()?>public/img/foto30.jpg">
                            <img src="<?= base_url()?>public/img/foto30.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto31.jpg">
                        <a href="<?= base_url()?>public/img/foto31.jpg">
                            <img src="<?= base_url()?>public/img/foto31.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto32.jpg">
                        <a href="<?= base_url()?>public/img/foto32.jpg">
                            <img src="<?= base_url()?>public/img/foto32.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto33.jpg">
                        <a href="<?= base_url()?>public/img/foto33.jpg">
                            <img src="<?= base_url()?>public/img/foto33.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto34.jpg">
                        <a href="<?= base_url()?>public/img/foto34.jpg">
                            <img src="<?= base_url()?>public/img/foto34.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto35.jpg">
                        <a href="<?= base_url()?>public/img/foto35.jpg">
                            <img src="<?= base_url()?>public/img/foto35.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                        <div class="col-sm-4 mt-3" data-src="<?= base_url()?>public/img/foto36.jpg">
                        <a href="<?= base_url()?>public/img/foto36.jpg">
                            <img src="<?= base_url()?>public/img/foto36.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
                        </a>
                        </div>
                    </div>
                </div>
            <!-- End of Main Content -->

            
                    
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url()?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url()?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url()?>assets/js/demo/chart-pie-demo.js"></script>

    <script src="<?= base_url()?>public/js/jquery.magnify.js"></script>
    <script>
      $(document).ready(function () {
        $(".img-thumbnail").magnify();
      });
    </script>

    <script src="<?= base_url()?>public/plugin/js/lightgallery-all.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#lightgallery').lightGallery();
      });
    </script>

    <script src="<?= base_url('public/darkmode/node_modules/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?= base_url('public/darkmode/node_modules/bootstrap/dist/js/bootstrap.bundle.js')?>"></script>

    <script>
        var dark = $('#dark');
        var ubah = $('#switch');

        ubah.change(function() {
            if(ubah.prop('checked') == true ){
                dark.attr('href', '<?= base_url()?>public/css/style9.css')
            }else {
                dark.attr('href', '<?= base_url()?>public/css/style13.css')
            }
        }) 
    </script>

</body>

</html>