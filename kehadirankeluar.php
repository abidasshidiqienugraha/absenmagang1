
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Beranda</title>

    <!-- Fontfaces CSS-->
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

</head>
<?php date_default_timezone_set('Asia/Jakarta'); ?>

<body class="animsition">
    <?php 
    session_start();
    if (!isset($_SESSION['nobp'])) {
        header("location: index.php");
    }else {
        $nobp = $_SESSION['nobp'];  
    }

 ?>
      <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
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
                          <a class="js-arrow" href="awal.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a> 
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Kehadiran Mahasiswa</a>
                            <a href="kehadiranmasuk.php">
                                <i class="fas fa-chart-bar"></i>Clock In</a>
                            <a href="kehadirankeluar.php">
                                <i class="fas fa-chart-bar"></i>Clock Out</a>    
                        </li>
                        <li>
                            <a href="mahasiswa/?m=mahasiswa&s=profil">
                                <i class="fas fa-table"></i>Profile</a>
                        </li>
                       
                       
                    </ul>
                </div>
            </nav>

        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
       <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="?m=awal">
                <h1>Hello <?php echo $_SESSION['nama']; ?></h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li >
                            <a class="js-arrow" href="awal.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                         <li class="active has-sub">
                            <a href="?m=kehadiranmahasiswa.php">
                                <i class="fas fa-chart-bar"></i>Kehadiran Mahasiswa</a>
                        </li>
                        <li>
                            <a href="mahasiswa/?m=mahasiswa&s=profil">
                                <i class="fas fa-chart-bar"></i>Profile</a>
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
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h1>Silahkan Di Klik Absensi Magang</h1>
                          
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            
             <!-- FORM -->
                    <div class="main-content">
                    <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <form action="dt_kehadiran_sv.php" method="post">
                                <div class="form-group">
                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                            <tr>
                                                <td>No Bp</td>
                                                <td>
                                                <input type="text" readonly="" class="form-control" name="nobp" autocomplete="off" readonly="" value="<?php echo $_SESSION['nobp']; ?>"></td>   
                                            </tr>
                                           
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" name="nama" autocomplete="off" readonly="" value="<?php echo $_SESSION['nama']; ?>"></td>
                                            </tr>

                                            <tr>
                                                <td>Jam Keluar</td>
                                                <td><input type="text" class="form-control" value="<?php echo date('h:i:s' ); ?>" name="waktu" readonly="" ></td>
                                            </tr>

                                           <tr>
                                              <td>Tanggal Kehadiran</td>
                                                <td><input type="text" class="form-control" value="<?php echo date('l, d-m-Y ' ); ?>" name="waktu" readonly="" ></td>
                                           </tr>
                                            <tr>
                                              <td>Status</td>
                                                <td>
                                                    <select class="form-control" required="" name="Status">
                                                    <option>Hadir</option>
                                                    <option>Izin</option>
                                                    <option>Alfa</option>
                                                    <option>Terlambat</option>

                                                </select>
                                                </td>
                                           </tr>

                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Absen Masuk</button></td>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Absen Keluar</button></td>
                                                
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
                                </div>    
                        </div>
                     <div class="row">
                           <div class="table-responsive table--no-card m-b-30">                                
                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                            <tr>
                                               
                                                <td>
                                                
                                               <a href="?m=mahasiswa&s=title"><button class="btn btn-warning">Klik Tombol ini jika tidak hadir / absen</button></a>
                                            </td>
                                            </tr>   
                                      </tbody>
                                    </table>
                                </div>    
                        </div>

                        <!-- END FORM -->

            
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
