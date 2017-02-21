<?php
  include "header.php";
  include "koneksi.php";
  
  $ID_KASIR=$_GET['id_kasir'];

  $query = "select * from kasir where ID_KASIR='$ID_KASIR'";

  $result=mysqli_query($koneksi,$query);
  
  if ($result){
    $row=mysqli_fetch_array($result);
  }

  if(isset($_POST['update-user'])){
    $A=$_POST['NAMA_KASIR'];
    $B=$_POST['ALAMAT_KASIR'];
    $C=$_POST['TELEPON_KASIR'];
    $D=$_POST['STATUS'];
    $E=$_POST['USERNAME'];
    $F=$_POST['PASSWORD'];

    $sql="UPDATE kasir SET NAMA_KASIR='$A',ALAMAT_KASIR='$B',TELEPON_KASIR='$C', STATUS='$D',USERNAME='$E',PASSWORD='$F' WHERE ID_KASIR='$ID_KASIR'";

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
                <label for="id_kasir">Id Kasir  : <?php echo $row['ID_KASIR'] ?></label>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="NAMA_KASIR">Nama Kasir</label>
                <input type="text" class="form-control" name="NAMA_KASIR" value="<?php echo $row['NAMA_KASIR'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ALAMAT_KASIR">Alamat Kasir</label>
                <input type="text" class="form-control" name="ALAMAT_KASIR" value="<?php echo $row['ALAMAT_KASIR'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Telepon">Telepon Kasir</label>
                <input type="text" class="form-control" name="TELEPON_KASIR" value="<?php echo $row['TELEPON_KASIR'] ?>">
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