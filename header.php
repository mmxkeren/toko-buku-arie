<?php
session_start();
if(empty($_SESSION)){
  header("Location: login.php");
} elseif ($_SESSION['AKSES']!='admin') {
  session_destroy();
  header("Location: login.php");
}
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
            <li><a href="buku.php"><i class="fa fa-users fa-fw"></i>Buku</a></li>
            <li><a href="distributor.php"><i class="fa fa-users fa-fw"></i>Distributor</a></li>
            <li><a href="pasok.php"><i class="fa fa-users fa-fw"></i>Pasok</a></li>
            <li><a href="penjualan.php"><i class="fa fa-users fa-fw"></i>Penjualan</a></li>
            <li><a href="manage-users.php"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="logout.php" onclick="return confirm('Yakin ingin Logout?')"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      