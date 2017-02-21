<?php
  include "header.php";
  include "koneksi.php";

  $distributor = "select * from distributor";
  $buku = "select * from buku";

  $hasil_distributor = $koneksi->query($distributor);
  $hasil_buku = $koneksi->query($buku);

  if(isset($_POST['tambah-pasok'])){
    $A=$_POST['ID_PASOK'];
    $B=$_POST['DISTRIBUTOR'];
    $C=$_POST['BUKU'];
    $D=$_POST['JUMLAH_PASOK'];
    $E=date("Y-m-d h:i:s");

    $sql = "INSERT INTO pasok VALUES ('$A','$B','$C','$D','$E')";
    
    $query = "select * from buku where ID_BUKU='".$C."'";
    $result=mysqli_query($koneksi,$query);
    if ($result){
      $row=mysqli_fetch_array($result);
    }
    $stok = $row['STOK']+$D;
    $sql_update="UPDATE buku SET STOK='$stok' WHERE ID_BUKU='".$C."'";
    $koneksi->query($sql_update);
    $koneksi->query($sql);
    header("Location: pasok.php");
  }
  ?>
  <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <!--form tambah-->
            <h1 class="margin-bottom-10 text-center" >Form Tambah pasok</h1>
            <form action="" class="templatemo-login-form" method="post" enctype="form tambah pasok">
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="id_pasok">Id pasok</label>
                <input type="text" class="form-control" name="ID_PASOK" placeholder="Id pasok">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label class="control-label templatemo-block">Nama Distributor</label>             
                  <select class="form-control" name="DISTRIBUTOR">
                    <option value="">PILIH DISTRIBUTOR</option>
                    <?php
                      foreach ($hasil_distributor as $row) {
                        echo "<option value='".$row['ID_DISTRIBUTOR']."'>".$row['NAMA_DISTRIBUTOR']."</option>";
                      }
                    ?>
                  </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label class="control-label templatemo-block">Buku</label>             
                  <select class="form-control" name="BUKU">
                  <option value="">PILIH BUKU</option>
                    <?php
                      foreach ($hasil_buku as $row) {
                        echo "<option value='".$row['ID_BUKU']."'>".$row['JUDUL']."</option>";
                      }
                    ?> 
                  </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Telepon">Jumlah Pasok</label>
                <input type="number" class="form-control" name="JUMLAH_PASOK"  placeholder="Jumlah Pasok">
              </div>
            </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name='tambah-pasok'>Submit</button>
              </div>                           
            </form>
          </div> 
          <?php
            $koneksi->close();
            include "footer.php";
          ?>