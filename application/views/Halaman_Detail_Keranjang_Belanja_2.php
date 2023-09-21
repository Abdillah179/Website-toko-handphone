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
                                <span class="mr-2 d-none d-lg-inline small" style="color: rgb(201, 197, 197);"><?= $session["username"];?></span>
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

                <div class="container">
                    <?php if($this->session->flashdata("flash")):?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Produk Berhasil</strong> <?= $this->session->flashdata("flash")?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif;?>
                </div>

                <div class="container">
                    <?php if($this->session->flashdata("hapus")):?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Semua Keranjang Belanja Berhasil</strong> <?= $this->session->flashdata("hapus")?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif;?>
                </div>

                <div class="container">
                    <?php if($this->session->flashdata("pembayaran")):?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Pembayaran </strong> <?= $this->session->flashdata("pembayaran")?>, Pesanan Anda Sedang Kami Proses Dan Akan Kami Kirimkan Secepatnya Ke Alamat Tujuan, Terimakasih Sudah Berbelanja Di Toko Kami ❤️❤️
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif;?>
                </div>

                <!-- About -->
            <div class="container-fluid p-0 m-0 conn">
                <div class="container">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3" style="background-color: white" >
                            <li class="breadcrumb-item"><a href="<?= base_url()?>Home/index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url()?>Halaman_Produk/index">Product</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="container">
                    <div class="row" style="background-color: white; padding:2px; margin:2px">
                        <div class="col-12">
                        <?php echo form_open('Halaman_Produk/UpdateCart'); ?>
                            <table class="table mt-3 ms-auto">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col" style="text-align: center;">Berat Satuan Produk (gr)</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col" style="text-align: center;">Total Berat Produk (gr)</th>
                                    <th scope="col" style="text-align: left;">Sub-Total</th>
                                    <th scope="col">Hapus</th>
                                </tr>

                                <?php $no = 1;?>
                                <?php $i = 1; ?>
                                <?php $total_berat = 0;?>
                                <?php $total_qty = 0;?>
                                
                        <?php foreach ($this->cart->contents() as $items): ?>

                            <?php $berat = $items["weight"] * $items["qty"];?>
                            <?php $total_berat = $total_berat + $berat;?>
                            <?php $total_qty = $total_qty + $items["qty"];?>

                            <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                            
                            <tr>
                                    <td><?= $no++;?></td>
                                    <!-- <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'class' => 'form-control')); ?></td> -->
                                    <td>
                                        <?php echo $items['name']; ?>

                                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                            <p>
                                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                                <?php endforeach; ?>
                                            </p>

                                        <?php endif; ?>

                </td>
                <td style="text-align:left">Rp. <?php echo number_format($items['price'], 0, ',', '.'); ?></td>
                <td style="text-align: center;"><?= $items["weight"];?>gr</td>
                <td><?= $items["qty"];?></td>
                <td style="text-align: center;"><?= $berat;?>gr</td>
                <td style="text-align:left">Rp. <?php echo $this->cart->format_number($items['subtotal'], 0, ',', '.'); ?></td>
                <td><a href="<?= base_url()?>Halaman_Produk/Hapus/<?= $items["rowid"];?>" onclick="return confirm('Apakah Anda Yakin Ingin Mengapus Keranjang Belanja')"><span class="badge bg-danger text-white">hapus</span></a></td>
        </tr>

        <?php $i++; ?>

        <?php endforeach; ?>

        <tr>
            <td colspan="6"></td>
            <td class="right"><strong>Total : &nbsp; &nbsp;</strong><?php echo $this->cart->format_number($this->cart->total(), 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td colspan="6"></td>
            <td class="right"><strong>Total Berat Keseluruhan Produk: &nbsp; &nbsp;</strong><?php echo $total_berat;?>gr</td>
        </tr>
        <tr>
            <td colspan="6"></td>
            <td class="right"><strong>Total QTY : &nbsp; &nbsp;</strong><?php echo $total_qty;?></td>
        </tr>
        

    </table>

                        </div>
                        <?php echo form_close();?>
                        <div class="container d-flex justify-content-end m-2 p-2">
                            <tr>
                                <td><a href="<?= base_url()?>Halaman_Produk/index"><button type="button" class="btn btn-primary btn-sm m-1"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 7px;"></i>Lanjut Belanja</button></a></td>
                                <td><a href="<?= base_url()?>Halaman_Produk/HapusSemuaKeranjang" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Semua Keranjang Belanja')"><button type="button" class="btn btn-danger btn-sm m-1"><i class="fa fa-trash" aria-hidden="true" style="margin-right:9px;"></i>Hapus Semua Keranjang</button></a></td>
                                <td><a href="<?= base_url()?>Halaman_Produk/Pembayaran"><button type="button" class="btn btn-success btn-sm m-1"><i class="fa fa-credit-card" aria-hidden="true" style="margin-right:9px;"></i>Pembayaran</button></a></td>
                            </tr>
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

    <!-- Link GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

    <script>
        gsap.from(".conn", { duration: 2, x: -100, opacity: 0 });
    </script>

</body>

</html>