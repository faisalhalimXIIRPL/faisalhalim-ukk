<?php
session_start();
if(empty($_SESSION['nik'])){ ?>
    <script type="text/javascript">
    alert('Maaf Anda Belum Melakukan Login');
    window.location.assign('index.php');
    </script>
<?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi catatan kita - User</title>

    <!-- Custom fonts for this template-->
  

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="style.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav customgradient sidebar sidebar-dark accordion" style="border:none;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="border:none;" href="user.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Catatan Kita</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="?url=tulis_catatan">
                    <i class="fas fa-fw fa-clone"></i>
                    <span>Tulis Catatan / Perjalanan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?url=catatan_perjalanan">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Catatan Perjalanan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h2 class="customtext1">Aplikasi catatan perjalanan</h2>

                     <!-- Topbar Search -->
                     <form
                        class="d-none d-sm-inline-block form-inline  ml-auto mr-1 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark customgradient1" style="border:none"type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                
                    <li class="nav-item dropdown mb-4 no-arrow center" style=" align-items:right;">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?php  echo $_SESSION['nama_lengkap']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                         
                        </li>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="mb-4 text-gray-800">
                        <?php
                        if(!empty(@$_GET['url'])){
                            switch (@$_GET['url']) {
                                case 'tulis_catatan';
                                   include'tulis_catatan.php';
                                    break;

                                case 'catatan_perjalanan';
                                   include'catatan_perjalanan.php';
                                    break;
                                
                                default:
                                    echo "<h3>Halaman Tidak Ditemukan</h3>";
                                    break;
                            }
                        }else{
                           
                            
                            echo'<p class="font-weight-500 text-dark">Selamat datang, Tulis pengalaman mu hari ini atau lihat catatan-catatan mu sebelumnya</p>';
                    
                           
                            echo ' <div class="row mt-2">

                       <a href="?url=tulis_catatan" class="col-xl-6 col-mt-5 mt-6">
                       <div class="card customgradient1 shadow py-2">
                         <div class="card-body">
                           <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                               <div class="text-xl font-weight-bold text-light text-uppercase">Tulis Catatan</div>
                             </div>
                             <div class="col-auto">
                               <i class="fas fa-pen fa-2x text-light"></i>
                             </div>
                           </div>
                         </div>
                       </div>
                     </a>
       
                     <!-- Earnings (Monthly) Card Example -->
                     <a href="?url=catatan_perjalanan" class="col-xl-6 col-mt-5 mt-6">
                     <div class="card customgradient1 shadow py-2">
                         <div class="card-body">
                           <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                               <div class="text-xl font-weight-bold text-light text-uppercase">Lihat Catatan</div>
                             </div>
                             <div class="col-auto">
                               <i class="fas fa-book fa-2x text-light"></i>
                             </div>
                           </div>
                         </div>
                       </div>
                     </a>
                       </div>';
                        }
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aplikasi catatan kita 2022</span>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

  



</body>

</html>