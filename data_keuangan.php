<?php
error_reporting(0); 
require_once("koneksi.php");
session_start();
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Idiot-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Idiot-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Keterangan</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->
</head>

<body class="animsition">
      <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="admin2.php">
                            <h1>admin</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data user</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                       <li>
                            <a href="data_keterangan.php">
                                <i class="fas fa-table"></i>data Keterangan
                            </a>
                        </li>
                       
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                  <h1>admin</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                          
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                        <li>
                            <a href="data_keterangan.php"><i class="fas fa-table"></i>Data Keterangan</a>
                        </li>
                        <li class="active has-sub">
                            <a href="data_keuangan.php"><i class="fas fa-table"></i>Data Keuangan</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->

            
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!--Tabel Pemasukan-->
                        <div class="row">
                                <div class="table-responsive table--no-card m-b-30">Tabel Pemasukan
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Pemasukan</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Penginput</th>
                                                <th>Aksi</th>                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                            $no = 1;  
                                         ?>
                                        <tbody>
                                           
                                           <?php 
                                           $no++;
                                            include 'paging_pem.php';

                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                        </div>
                        <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
                                </li>
                                <?php 
                                for($x=1;$x<=$total_halaman;$x++){
                                    ?> 
                                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                    <?php
                                }
                                ?>              
                                <li class="page-item">
                                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                                </li>
                        </ul>
                        <!--Tabel Pengeluaran-->
                        <div class="row">
                                <div class="table-responsive table--no-card m-b-30">Tabel Pengeluaran
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Pengeluaran</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Penginput</th>
                                                <th>Aksi</th>                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                            $no = 1;  
                                         ?>
                                        <tbody>
                                           
                                           <?php 
                                           $no++;
                                            include 'paging_peng.php';

                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                        </div>
                        <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
                                </li>
                                <?php 
                                for($x=1;$x<=$total_halaman;$x++){
                                    ?> 
                                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                    <?php
                                }
                                ?>              
                                <li class="page-item">
                                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                                </li>
                        </ul>
        
                        <!-- Bagian Chart Start -->
                        <div class="row" style="margin-top: 20px;"> 
                            <!-- Pemasukkan -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <?php                                             
                                                $pemasukanHari=mysqli_query($koneksi, "SELECT jumlah FROM tb_pemasukan where tgl_pemasukan = CURDATE()");
                                                while ($masukH=mysqli_fetch_array($pemasukanHari)){
                                                    $arraymasukH[] = $masukH['jumlah'];
                                                }
                                                $pemasukan_hari_ini = array_sum($arraymasukH);
                                            
                                                $pemasukan=mysqli_query($koneksi,"SELECT * FROM tb_pemasukan");
                                                while ($masuk=mysqli_fetch_array($pemasukan)){
                                                    $arraymasuk[] = $masuk['jumlah'];
                                                }
                                                $jumlahmasuk = array_sum($arraymasuk);
                                            ?>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pendapatan (Hari Ini)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                                        if($pemasukan_hari_ini == null){
                                                            echo "Belum Ada Pemasukan";
                                                        }else{
                                                            echo "Rp".number_format($pemasukan_hari_ini,2,',','.');
                                                        }
                                                    ?>
                                                </div>
                                                </div>
                                                <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div> &nbsp Mingguan : Rp. 
                                        <?php
                                            echo number_format($jumlahmasuk,2,',','.');
                                        ?>
                                    </div>
                                </div>

                            <!--Pengeluaran -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <?php 
                                                
                                                $pengeluaranHari=mysqli_query($koneksi, "SELECT jumlah FROM tb_pengeluaran where tgl_pengeluaran = CURDATE()");
                                                    while ($keluarH=mysqli_fetch_array($pengeluaranHari)){
                                                    $arraykeluarH[] = $keluarH['jumlah'];
                                                }
                                                $pengeluaran_hari_ini = array_sum($arraykeluarH);
                                            
                                                $pengeluaran=mysqli_query($koneksi,"SELECT * FROM tb_pengeluaran");
                                                    while ($keluar=mysqli_fetch_array($pengeluaran)){
                                                    $arraykeluar[] = $keluar['jumlah'];
                                                }
                                                $jumlahkeluar = array_sum($arraykeluar);
                                        ?>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengeluaran (Hari Ini)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?=number_format($pengeluaran_hari_ini,2,',','.');?></div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div> &nbsp Mingguan : Rp. 
                                    <?php
                                        echo number_format($jumlahkeluar,2,',','.');
                                    ?>
                                </div>
                            </div>
                        </div>
                       
                    <!-- Bagian Chart End -->            
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
                                               
</body>

</html>
<!-- end document-->
