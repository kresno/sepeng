<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include 'config/sidebar.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro

                        </a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Basic Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Table</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table" >
                                    <thead class="text-center">
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 270px;">&nbsp;</td>
                                            <td style="height: 22px; width: 237px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 13px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;" colspan="32">Formulir</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;" colspan="32">Evaluasi Hasil terhadap RENJA PD</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;" colspan="32">Kabupaten Sukabumi</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;" colspan="32">Tahun 2019</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 270px;">&nbsp;</td>
                                            <td style="height: 22px; width: 237px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 13px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;" colspan="32">Sasaran Pembangunan Tahunan Kabupaten : Sukabumi</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;" colspan="32">Sasaran : Meningkatnya Kualitas Perencanaan Pembangunan Daerah</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 270px;">&nbsp;</td>
                                            <td style="height: 22px; width: 237px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 13px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 22px;">
                                            <td style="height: 66px; width: 24px;" rowspan="3">No</td>
                                            <td style="height: 66px; width: 60px;" colspan="4" rowspan="3">Kode</td>
                                            <td style="height: 66px; width: 270px;" rowspan="3">Urusan/Bidang Urusan Pemerintahan Daerah dan Program/Kegiatan</td>
                                            <td style="height: 66px; width: 237px;" rowspan="3">Indikator Kinerja Program (Outcome)/Kegiatan (Output)<br /><br /></td>
                                            <td style="height: 44px; width: 44px;" colspan="3" rowspan="2">Target RPJMD pada<br />Tahun 2016 s/d 2021<br />(Periode RPJMD)</td>
                                            <td style="height: 44px; width: 30px;" colspan="2" rowspan="2">Realisasi Capaian Kinerja RPJMD s/d RKPD Tahun Lalu (n-2) </td>
                                            <td style="height: 44px; width: 30px;" colspan="2" rowspan="2">Target Kinerja dan Anggaran<br />RKPD Tahun berjalan<br />(tahun n-1) yang dievaluasi</td>
                                            <td style="height: 22px; width: 120px;" colspan="8">Realisasi Kinerja Pada Triwulan</td>
                                            <td style="height: 44px; width: 30px;" colspan="2" rowspan="2">Realisasi Capaian Kinerja dan Anggaran RKPD yang Dievaluasi<br />(tahun n-1)</td>
                                            <td style="height: 44px; width: 30px;" colspan="2" rowspan="2">Tingkat Capaian Kinerja dan Realisasi Anggaran RKPD Tahun n-1 (%)</td>
                                            <td style="height: 44px; width: 28px;" colspan="2" rowspan="2">Realisasi Kinerja &amp; Anggaran RPJMD s/d Tahun n-1<br />(Akhir Thn Pelaks RKPD)</td>
                                            <td style="height: 44px; width: 30px;" colspan="2" rowspan="2">Tingkat Capaian Kinerja dan Realisasi Anggaran RPJMD s/d Tahun n-1<br />(%)</td>
                                            <td style="height: 66px; width: 15px;" rowspan="3">Perangkat Daerah <br />Penanggung<br />Jawab</td>
                                            <td style="height: 66px; width: 15px;" rowspan="3">Keterangan</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 30px;" colspan="2">I</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">II</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">III</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">IV</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 30px;" colspan="2">K</td>
                                            <td style="height: 22px; width: 14px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15.9167px;">K</td>
                                            <td style="height: 22px; width: 14.0833px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 13px;">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;">K</td>
                                            <td style="height: 22px; width: 15px;">Rp.</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;">1</td>
                                            <td style="height: 22px; width: 60px;" colspan="4">2</td>
                                            <td style="height: 22px; width: 270px;">3</td>
                                            <td style="height: 22px; width: 237px;">4</td>
                                            <td style="height: 22px; width: 44px;" colspan="3">5</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">6</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">7</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">8</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">9</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">10</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">11</td>
                                            <td style="height: 22px; width: 30px;" colspan="2">12=8+9+10+11</td>
                                            <td style="height: 22px; width: 15px;" colspan="2">13 = 12/7 *100</td>
                                            <td style="height: 22px; width: 15px;" colspan="2">14 = 6+12</td>
                                            <td style="height: 22px; width: 15px;" colspan="2">15 = 14/5 *100</td>
                                            <td style="height: 22px; width: 15px;">16</td>
                                            <td style="height: 22px; width: 15px;">17</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 270px;">&nbsp;</td>
                                            <td style="height: 22px; width: 237px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 13px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 24px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 270px;">&nbsp;</td>
                                            <td style="height: 22px; width: 237px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                                            <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 13px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                            <td style="height: 22px; width: 15px;">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            
                            <iframe src="../layout.php" frameborder="0" allowfullscreen style="width:100%;height:600px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    
    <!-- buat print ke excel dari iframe -->
    
</body>

</html>
