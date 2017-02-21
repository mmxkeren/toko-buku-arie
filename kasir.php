<?php
session_start();
if(empty($_SESSION)){
  header("Location: login.php");
} elseif ($_SESSION['AKSES']!='kasir') {
  session_destroy();
  header("Location: login.php");
}

include "koneksi.php";

$sql_buku = "SELECT * FROM buku";
$query_buku = mysqli_query($koneksi,$sql_buku);
$count_buku = mysqli_num_rows($query_buku);

$sql_total_stok = "SELECT SUM(STOK) as jumlahstock FROM buku";
$query_total_buku = mysqli_query($koneksi,$sql_total_stok);
if ($query_total_buku){
  $row=mysqli_fetch_array($query_total_buku);
}

$sql_penjualan = "SELECT * FROM penjualan";
$query_penjualan = mysqli_query($koneksi,$sql_penjualan);
$count_penjualan = mysqli_num_rows($query_penjualan);

$sql_pasok = "SELECT * FROM pasok";
$query_pasok = mysqli_query($koneksi,$sql_pasok);
$count_pasok = mysqli_num_rows($query_pasok);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Toko Buku Arie - Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Hi, <?php echo $_SESSION['USERNAME']; ?></h1>
        </header>

        <div class="templatemo-content-widget white-bg col-1 text-center">
              <i class="fa fa-times"></i>
              <img src="images/person.jpg" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text-uppercase blue-text margin-bottom-5"><?php echo $_SESSION['NAMA']; ?></h2>
              <h3 class="text-uppercase margin-bottom-70"><?php echo $_SESSION['AKSES']." ".$_SESSION['STATUS']; ?></h3>
              <div class="templatemo-social-icons-container">
                <div class="social-icon-wrap">
                  <i class="fa fa-facebook templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-twitter templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-google-plus templatemo-social-icon"></i>  
                </div>                
              </div>
            </div>

        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="index.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="form-pasok-kasir.php"><i class="fa fa-users fa-fw"></i>Pasok</a></li>
            <li><a href="form-penjualan-kasir.php"><i class="fa fa-users fa-fw"></i>Penjualan</a></li>
            <li><a href="logout.php" onclick="return confirm('Yakin ingin Logout?')"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">

          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-1">
              <i class="fa fa-times"></i>
              <h2 class="text-uppercase">Summary</h2>
              <h3 class="text-uppercase">Toko Buku Arie</h3><hr>

              <h2><a href="form-pasok-kasir.php" class="active"><i class="fa fa-users fa-fw"></i>Total pasok</a></h2>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $count_pasok; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $count_pasok; ?>%;"></div><h3><?php echo $count_pasok; ?> Pemasok</h3>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $count_buku; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $count_buku; ?>%;"></div>
                <h3><?php echo $count_buku; ?> buah (jenis buku)</h3>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $row['jumlahstock']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['jumlahstock']; ?>%;"></div>
                <h3><?php echo $row['jumlahstock']; ?> buah (jumlah buku)</h3>
              </div>

              <h2><a href="form-penjualan-kasir.php" class="active"><i class="fa fa-bars fa-fw"></i>penjualan</a></h2>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $count_penjualan; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $count_penjualan; ?>%;"></div><h3><?php echo $count_penjualan; ?> penjualan</h3>
              </div>
            </div>
          </div>
           
          <?php
            include "footer.php";
          ?>