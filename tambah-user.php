<?php
  include "header.php";
  include "koneksi.php";

  if(isset($_POST['tambah-user'])){
    $ID = $_POST['ID_KASIR'];
    $A=$_POST['NAMA_KASIR'];
    $B=$_POST['ALAMAT_KASIR'];
    $C=$_POST['TELEPON_KASIR'];
    $D=$_POST['STATUS'];
    $E=$_POST['USERNAME'];
    $F=$_POST['PASSWORD'];
    $g=$_POST['AKSES'];

    $sql = "INSERT INTO kasir VALUES ('$ID','$A','$B','$C','$D','$E','$F','$G')";
    mysqli_query($koneksi,$sql);
    header("Location: manage-users.php");
  }
  ?>
  <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <!--form tambah-->
            <h1 class="margin-bottom-10 text-center" >Form Tambah User</h1>
            <form action="" class="templatemo-login-form" method="post" enctype="form tambah user">
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="id_kasir">Id Kasir</label>
                <input type="text" class="form-control" name="ID_KASIR" placeholder="Id Kasir">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="NAMA_KASIR">Nama Kasir</label>
                <input type="text" class="form-control" name="NAMA_KASIR" placeholder="Nama Kasir">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ALAMAT_KASIR">Alamat Kasir</label>
                <input type="text" class="form-control" name="ALAMAT_KASIR"  placeholder="Alamat Kasir">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Telepon">Telepon Kasir</label>
                <input type="text" class="form-control" name="TELEPON_KASIR"  placeholder="Telepon Kasir">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Status">Status</label>
                <input type="text" class="form-control" name="STATUS"  placeholder="Status">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="USERNAME"  placeholder="Username">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Password">Password</label>
                <input type="Password" class="form-control" name="PASSWORD"  placeholder="New Password">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Password">Confirm Password</label>
                <input type="Password" class="form-control" name="PASSWORD"  placeholder="New Confirm Password">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label class="control-label templatemo-block">Jenis User</label>             
                  <select class="form-control" name="AKSES">
                    <option value="">PILIH TIPE</option>
                    <option value="1">Admin</option>
                    <option value="2">Kasir</option>                      
                    <option value="3">Guest</option> 
                  </select>
              </div>
            </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name='tambah-user'>Submit</button>
              </div>                           
            </form>
          </div> 
          <?php
            $koneksi->close();
            include "footer.php";
          ?>