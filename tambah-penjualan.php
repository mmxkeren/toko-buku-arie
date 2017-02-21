<?php
  include "header.php";
  include "koneksi.php";

  //query untuk combo box buku dari database
  $buku = "select * from buku";
  $hasil_buku = $koneksi->query($buku);

  //query untuk ambil data kasir
  $kasir = "select * from kasir where NAMA_KASIR='".$_SESSION['NAMA']."'";
  $result=mysqli_query($koneksi,$kasir);
  if ($result){
    $hasil_kasir=mysqli_fetch_array($result);
  }

  if(isset($_POST['tambah-penjualan'])){
    $A=$_POST['ID_PENJUALAN'];
    $B=$_POST['BUKU'];
    $D=$_POST['JUMLAH_PENJUALAN'];
    $C=$hasil_kasir['ID_KASIR'];
    $F=date("Y-m-d h:i:s");
    
    //query data buku dari id buku yang diambil dari post
    $query = "select * from buku where ID_BUKU='".$B."'";
    $result=mysqli_query($koneksi,$query);
    if ($result){
      $row=mysqli_fetch_array($result);
    }
    
    //total harga
    $E=$row['HARGA_JUAL']*$D;
    
    //mengurangi stok
    $stok = $row['STOK']-$D;

    //query insert data ke tabel penjualan
    $sql = "INSERT INTO penjualan VALUES ('$A','$B','$C','$D','$E','$F')";
    //query update stok
    $sql_update="UPDATE buku SET STOK='$stok' WHERE ID_BUKU='".$B."'";

    //eksekusi query
    $koneksi->query($sql);
    $koneksi->query($sql_update);
    header("Location: penjualan.php");
  }
  ?>
  <!-- Main content --> 
  <div class="templatemo-content col-1 light-gray-bg">
    <div class="templatemo-content-container">
      <div class="templatemo-content-widget white-bg">
        <!--form TAMBAH-->
        <h1 class="margin-bottom-10 text-center" >FORM TAMBAH PENJUALAN</h1>
        <form action="" class="templatemo-login-form" method="post" enctype="FORM TAMBAH PENJUALAN">
        <div class="row form-group">
          <div class="col-lg-12 form-group">
            <label for="id_PENJUALAN">ID PENJUALAN</label>
            <input type="text" class="form-control" name="ID_PENJUALAN" placeholder="Id PENJUALAN">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-12 form-group">
            <label class="control-label templatemo-block">BUKU</label>             
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
            <label for="Telepon">JUMLAH PENJUALAN</label>
            <input type="number" class="form-control" name="JUMLAH_PENJUALAN"  placeholder="JUMLAH PENJUALAN">
          </div>
        </div>
          <div class="form-group text-right">
            <button type="submit" class="templatemo-blue-button"  name='tambah-penjualan'>Submit</button>
          </div>                           
        </form>
      </div> 
    <?php
      $koneksi->close();
      include "footer.php";
    ?>