<?php
session_start();
if ($_SESSION['level']=="") {
    header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Inventory KA</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  

  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="admin.php" class="logo">KA <span class="lite">Inventory</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
       
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
         
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
         
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/merahputih-small.jpg">
                            </span>
                            <span class="username"><?php echo "". $_SESSION['username'] ."" ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#myModal" data-toggle="modal" ><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="logout.php" onclick="return confirm('Yakin anda ingin Logout?')"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>

    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>List Data</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="list-petugas.php">List Petugas</a></li>
              <li><a class="" href="list-supplier.php">List Supplier</a></li>
              <li><a class="" href="list-pelanggan.php">List Pelanggan</a></li>
              <li><a class="" href="list-barang.php">List Barang</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="arrow_carrot-2down"></i>
                          <span>Pembelian</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="pembelian.php">Pembelian</a></li>
              <li><a class="" href="pembelian-detail.php">Detail Pembelian</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="arrow_carrot-2up"></i>
                          <span>Penjualan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="penjualan.php">Penjualan</a></li>
              <li><a class="" href="penjualan-detail.php">Detail Penjualan</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_currency"></i>
                          <span>Pembayaran</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="pembayaran-hutang.php">Pembayaran Hutang</a></li>
              <li><a class="" href="pembayaran-piutang.php">Pembayaran Piutang</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="faktur.php">
                          <i class="icon_clipboard"></i>
                          <span>Faktur</span>

                      </a>

          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
 <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="arrow_carrot-2down_alt2"></i> Pembelian</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="admin.php">Home</a></li>
              <li><i class="arrow_carrot-2down_alt2"></i>Pembelian</li>
            </ol>
          </div>
        </div>
        <!-- MULAI DARI SINI YA BODYNYA --->
<div class="panel panel-default">
                        
        <!-- page start-->

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel panel-default">
                        
                  <div class="panel-body">
                <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                                  Tambah Pembelian
                              </a>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Tambah Pembelian</h4>
                      </div>
                      <div class="modal-body">

                         <form action="proses-tambah-pembelian.php" method="POST">
        <fieldset>
        <div class="form-group">
            <input type="hidden" name="nomor_beli" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="tgl_beli">Tgl : </label><br>
            <input type="date" name="tgl_beli" class="form-control"/>
        </div>
        <?php

        require_once 'konek.php';

        $query = "SELECT * FROM supplier ORDER BY nama_supplier";

        $query = mysqli_query($db, $query);

        ?>   

        <div class="form-group">
            <label for="kode_supplier"> Nama Supplier : </label><br>
            <select name="kode_supplier"> 
                <?php while($mhs = mysqli_fetch_assoc($query)) { ?>
                <option value="<?php echo $mhs['kode_supplier']; ?>">
                  <?php echo $mhs['nama_supplier']; ?>
                </option>
            <?php } ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="total_beli"> Total Beli : </label><br>
            <input type="text" name="total_beli" class="form-control"/>
        </div>
         <div class="form-group">
            <label for="total_diskon"> Total Diskon : </label><br>
            <input type="text" name="total_diskon" class="form-control"/>
        </div>
         <div class="form-group">
            <label for="total_bayar"> Total Bayar : </label><br>
            <input type="text" name="total_bayar" class="form-control"/>
        </div>
         <div class="form-group">
            <label for="hutang"> Hutang : </label><br>
            <input type="text" name="hutang" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan Data" class="btn btn-success" name="daftar1"/>
            </div>
        </fieldset>
    </form>
                      </div>
                    </div>
                  </div>
                </div>
                </div>      
              </div>

              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th><center>Tanggal Beli</center></th>
                    <th>Nama Supplier</th>
                    <th>Alamat Supplier</th>
                    <th>Total Beli</th>
                    <th>Diskon</th>
                    <th>Total Bayar</th>
                    <th>Hutang</th>
                    <th><i class="icon_cogs"></i> Aksi</th>
                  </tr>
                </thead>
                <tbody>
<?php
include ("konek.php");
$sql = "SELECT * FROM pembelian a, supplier b WHERE a.kode_supplier = b.kode_supplier ORDER BY tgl_beli DESC";
//$sql = "SELECT * FROM pembelian ORDER BY tgl_beli DESC";
//$sql = "SELECT tgl_beli, nama_supplier, alamat, total_beli, total_diskon, total_bayar, hutang FROM pembelian natural join supplier";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while($mhs = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td align='right'>".date('l, d-F-y',strtotime($mhs['tgl_beli']))."</td>";
            echo "<td>".$mhs['nama_supplier']."</td>";  
            echo "<td>".$mhs['alamat']."</td>"; 
            echo "<td>Rp. ".number_format($mhs['total_beli']).",-"."</td>";
            echo "<td>Rp. ".number_format($mhs['total_diskon']).",-"."</td>";  
            echo "<td>Rp. ".number_format($mhs['total_bayar']).",-"."</td>";  
            echo "<td>Rp. ".number_format($mhs['hutang']).",-"."</td>";  
            echo "<td>";
            echo "<div class='btn-group'>";
            echo "<a class='btn btn-success' href='edit-pembelian.php?nomor_beli=".$mhs['nomor_beli']."'><i class='icon_pencil-edit'></i></a> ";
            echo "<a class='btn btn-danger' href='hapus-pembelian.php?nomor_beli=".$mhs['nomor_beli']."'><i class='icon_close_alt2'></i></a>";
            echo "</div>";
            echo "</td>";

            echo "</tr>";
            $no++;
           
        }
        
        ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>






        <!-- SAMPE SINI YA GUYS -->
        <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    

</body>

</html>
