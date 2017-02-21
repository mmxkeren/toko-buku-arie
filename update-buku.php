<?php
  include "header.php";
  include "koneksi.php";
  
  $ID_BUKU=$_GET['id_buku'];

  $query = "select * from buku where ID_BUKU='$ID_BUKU'";

  $result=mysqli_query($koneksi,$query);
  
  if ($result){
    $row=mysqli_fetch_array($result);
  }

  if(isset($_POST['update-buku'])){
    $A=$_POST['JUDUL'];
    $B=$_POST['NOISBN'];
    $C=$_POST['PENULIS'];
    $D=$_POST['PENERBIT'];
    $E=$_POST['TAHUN'];
    $F=$_POST['STOK'];
    $G=$_POST['HARGA_POKOK'];
    $H=$_POST['HARGA_JUAL'];
    $I=$_POST['PPN'];
    $J=$_POST['DISKON'];

    $sql="UPDATE buku SET JUDUL='$A', NOISBN='$B', PENULIS='$C', PENERBIT='$D', TAHUN='$E', STOK='$F', HARGA_POKOK='$G', HARGA_JUAL='$H', PPN='$I', DISKON='$J' WHERE ID_BUKU='$ID_BUKU'";

    mysqli_query($koneksi,$sql);

    header("Location: buku.php");
  }
  ?>
  <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <!--form update-->
            <h1 class="margin-bottom-10 text-center" >Form Update Buku</h1>
            <form action="" class="templatemo-login-form" method="post" enctype="form update Buku">
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ID_BUKU">Id Buku : <?php echo $row['ID_BUKU'] ?></label>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="JUDUL">Judul Buku</label>
                <input type="text" class="form-control" name="JUDUL" value="<?php echo $row['JUDUL'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="NOISBN">No ISBN</label>
                <input type="text" class="form-control" name="NOISBN"  value="<?php echo $row['NOISBN'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Penulis">Penulis </label>
                <input type="text" class="form-control" name="PENULIS"  value="<?php echo $row['PENULIS'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Penerbit">Penerbit</label>
                <input type="text" class="form-control" name="PENERBIT"  value="<?php echo $row['PENERBIT'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="TAHUN">TAHUN</label>
                <input type="text" class="form-control" name="TAHUN"  value="<?php echo $row['TAHUN'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="STOK">STOK</label>
                <input type="text" class="form-control" name="STOK"  value="<?php echo $row['STOK'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="HARGA_POKOK">HARGA POKOK</label>
                <input type="text" class="form-control" name="HARGA_POKOK"  value="<?php echo $row['HARGA_POKOK'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="HARGA_JUAL">HARGA JUAL</label>
                <input type="text" class="form-control" name="HARGA_JUAL"  value="<?php echo $row['HARGA_JUAL'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="PPN">PPN</label>
                <input type="text" class="form-control" name="PPN"  value="<?php echo $row['PPN'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="DISKON">DISKON</label>
                <input type="text" class="form-control" name="DISKON"  value="<?php echo $row['DISKON'] ?>">
              </div>
            </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name='update-buku'>Update</button>
              </div>                           
            </form>
          </div> 
          <?php
            $koneksi->close();
            include "footer.php";
          ?>