<?php
  include "header.php";
  include "koneksi.php";
  
  $ID_DISTRIBUTOR=$_GET['id_distributor'];

  $query = "select * from distributor where ID_DISTRIBUTOR='$ID_DISTRIBUTOR'";

  $result=mysqli_query($koneksi,$query);
  
  if ($result){
    $row=mysqli_fetch_array($result);
  }

  if(isset($_POST['update-distributor'])){
    $A=$_POST['NAMA_DISTRIBUTOR'];
    $B=$_POST['ALAMAT_DISTRIBUTOR'];
    $C=$_POST['TELEPON_DISTRIBUTOR'];

    $sql="UPDATE distributor SET NAMA_DISTRIBUTOR='$A',ALAMAT_DISTRIBUTOR='$B',TELEPON_DISTRIBUTOR='$C' WHERE ID_DISTRIBUTOR='$ID_DISTRIBUTOR'";

    mysqli_query($koneksi,$sql);

    header("Location: distributor.php");
  }
  ?>
  <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <!--form update-->
            <h1 class="margin-bottom-10 text-center" >Form Update Distributor</h1>
            <form action="" class="templatemo-login-form" method="post" enctype="form update distributor">
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ID_DISTIBUTOR">ID DISTIBUTOR : <?php echo $row['ID_DISTRIBUTOR'] ?></label>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="NAMA_DISTRIBUTOR">Nama Distributor</label>
                <input type="text" class="form-control" name="NAMA_DISTRIBUTOR" value="<?php echo $row['NAMA_DISTRIBUTOR'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ALAMAT_DISTRIBUTOR">Alamat Distributor</label>
                <input type="text" class="form-control" name="ALAMAT_DISTRIBUTOR" value="<?php echo $row['ALAMAT_DISTRIBUTOR'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Telepon">Telepon Distributor</label>
                <input type="text" class="form-control" name="TELEPON_DISTRIBUTOR" value="<?php echo $row['TELEPON_DISTRIBUTOR'] ?>">
              </div>
            </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name='update-distributor'>Update</button>
              </div>                           
            </form>
          </div> 
          <?php
            $koneksi->close();
            include "footer.php";
          ?>