<?php
session_start();
if ($_SESSION['level']=="") {
    header("location:../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Government Project 2</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='css/familyOpenSans.css' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<!-- DARI BOOTSTRAP SATUNYA -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">K A R T A N I</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../KARTANI2.jpeg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="?page=beranda"><i class="glyphicon glyphicon-home"></i> Beranda</a>
                    </li>
                    <li>
                        <a href="?page=masuk"><i class="glyphicon glyphicon-floppy-save"></i> Kas Masuk</a>
                    </li>
                    <li>
                        <a  href="?page=keluar"><i class="glyphicon glyphicon-floppy-open"></i> Kas Keluar</a>
                    </li>
                    <li>
                        <a  href="?page=rekap"><i class="glyphicon glyphicon-th-list"></i> Rekapitulasi Kas</a>
                    </li>	
                    <li>
                        <a  href="?page=user"><i class="glyphicon glyphicon-user"></i> Manajemen User</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="?page=beranda">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Admin Government Project 2</li>
        </ol>
<?php
if (isset($_GET['page'])){
  $page = $_GET['page'];
  switch ($page) {
    case 'beranda':
      include 'beranda.php';
      break;
    case 'masuk':
      include 'kas-masuk.php';
      break;
    case 'keluar':
      include 'kas-keluar.php';
      break;
    case 'tambahkeluar':
      include 'tambah-kas-keluar.php';
    break;
    case 'lihat':
      include 'lihat.php';
    break;
    case 'editnota':
      include 'edit-nota.php';
      break;
    case 'beranda':
      include 'beranda.php';
    break;
   
  } 
}else{
  include 'beranda.php';
}



?>
                    </div>

                </div>
                 <!-- /. ROW  -->

                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
             <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Mas Abay & Ang Dinar 2020</span>
          </div>
        </div>
      </footer>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
   
</body>
</html>