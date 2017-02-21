<?php
  include "header.php";
  include "koneksi.php";
  
  //
  $ID_PASOK=$_GET['ID_PASOK'];
  $query = "select * from pasok where ID_PASOK='$ID_PASOK'";
  $result=mysqli_query($koneksi,$query);
  
  if ($result){
    $row=mysqli_fetch_array($result);
  }

  if(isset($_POST['update-user'])){
    $A=$_POST['ID_PASOK'];
    $B=$_POST['DISTRIBUTOR'];
    $C=$_POST['BUKU'];
    $D=$_POST['JUMLAH_PASOK'];
    $E=date("Y-m-d h:i:s");

    $sql="UPDATE PASOK SET ID_PASOK='$A',ID_DIS='$B',TELEPON_PASOK='$C', STATUS='$D',USERNAME='$E',PASSWORD='$F' WHERE ID_PASOK='$ID_PASOK'";

    mysqli_query($koneksi,$sql);

    header("Location: manage-users.php");
  }
  ?>
    <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <!--form update-->
            <h1 class="margin-bottom-10 text-center" >Form Update User</h1>
            <form action="" class="templatemo-login-form" method="post" enctype="form update user">
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="id_PASOK">Id PASOK  : <?php echo $row['ID_PASOK'] ?></label>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="NAMA_PASOK">Nama PASOK</label>
                <input type="text" class="form-control" name="NAMA_PASOK" value="<?php echo $row['NAMA_PASOK'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ALAMAT_PASOK">Alamat PASOK</label>
                <input type="text" class="form-control" name="ALAMAT_PASOK" value="<?php echo $row['ALAMAT_PASOK'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Telepon">Telepon PASOK</label>
                <input type="text" class="form-control" name="TELEPON_PASOK" value="<?php echo $row['TELEPON_PASOK'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Status">Status</label>
                <input type="text" class="form-control" name="STATUS" value="<?php echo $row['STATUS'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="USERNAME" value="<?php echo $row['USERNAME'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Password">Password</label>
                <input type="text" class="form-control" name="PASSWORD" value="<?php echo $row['PASSWORD'] ?>">
              </div>
            </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name='update-user'>Update</button>
              </div>                           
            </form>
          </div> 
          <?php
            $koneksi->close();
            include "footer.php";
          ?>