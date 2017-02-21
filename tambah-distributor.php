<?php
  include "header.php";
  include "koneksi.php";

  if(isset($_POST['tambah-distributor'])){
    $ID = $_POST['ID_DISTIBUTOR'];
    $A=$_POST['NAMA_DISTIBUTOR'];
    $B=$_POST['ALAMAT_DISTIBUTOR'];
    $C=$_POST['TELEPON_DISTIBUTOR'];

    $sql = "INSERT INTO distributor VALUES ('$ID','$A','$B','$C')";
    mysqli_query($koneksi,$sql);
    header("Location: distributor.php");
  }
  ?>
  <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <!--form tambah-->
            <h1 class="margin-bottom-10 text-center" >Form Tambah Distributor</h1>
            <form action="" class="templatemo-login-form" method="post" enctype="form tambah distributor">
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ID_DISTIBUTOR">ID DISTIBUTOR</label>
                <input type="text" class="form-control" name="ID_DISTIBUTOR" placeholder="ID DISTIBUTOR">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="NAMA_DISTIBUTOR">NAMA DISTIBUTOR</label>
                <input type="text" class="form-control" name="NAMA_DISTIBUTOR" placeholder="NAMA DISTIBUTOR">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ALAMAT_DISTIBUTOR">ALAMAT DISTIBUTOR</label>
                <input type="text" class="form-control" name="ALAMAT_DISTIBUTOR"  placeholder="ALAMAT DISTIBUTOR">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="TELEPON">TELEPON DISTIBUTOR</label>
                <input type="text" class="form-control" name="TELEPON_DISTIBUTOR"  placeholder="TELEPON DISTIBUTOR">
              </div>
            </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name='tambah-distributor'>Submit</button>
              </div>                           
            </form>
          </div> 
          <?php
            $koneksi->close();
            include "footer.php";
          ?>