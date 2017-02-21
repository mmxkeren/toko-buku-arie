<?php
  include "header.php";
  include "koneksi.php";

  if(isset($_POST['tambah-user'])){
    $ID = $_POST['ID_BUKU'];
    $A=$_POST['JUDUL'];
    $B=$_POST['NOISBN'];
    $C=$_POST['PENULIS'];
    $D=$_POST['PENERBIT'];
    $E=$_POST['TAHUN'];
    $F=$_POST['STOK'];
    $G=$_POST['HARGA_POKOK'];
    $I=$G*0.1;
    $J=$G*($_POST['DISKON']/100);
    $H=$G+$I-$J;

    $sql = "INSERT INTO Buku VALUES ('$ID','$A','$B','$C','$D','$E','$F','$G','$H','$I',$J)";
    mysqli_query($koneksi,$sql);
    header("Location: buku.php");
  }
  ?>
  <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <!--form tambah-->
            <h1 class="margin-bottom-10 text-center" >Form Tambah Buku</h1>
            <form action="" class="templatemo-login-form" method="post" enctype="form tambah Buku">
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="ID_BUKU">Id Buku</label>
                <input type="text" class="form-control" name="ID_BUKU" placeholder="Id Buku">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="JUDUL">Judul Buku</label>
                <input type="text" class="form-control" name="JUDUL" placeholder="Judul Buku">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="NOISBN">No ISBN</label>
                <input type="number" class="form-control" name="NOISBN"  placeholder="No ISBN">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Penulis">Penulis </label>
                <input type="text" class="form-control" name="PENULIS"  placeholder="Penulis">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="Penerbit">Penerbit</label>
                <input type="text" class="form-control" name="PENERBIT"  placeholder="Penerbit">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="TAHUN">TAHUN</label>
                <input type="number" class="form-control" name="TAHUN"  placeholder="TAHUN">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="STOK">STOK</label>
                <input type="number" class="form-control" name="STOK"  placeholder="STOK">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="HARGA_POKOK">HARGA POKOK</label>
                <input type="number" class="form-control" name="HARGA POKOK"  placeholder="HARGA POKOK">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-lg-12 form-group">
                <label for="DISKON">DISKON (dalam prosentase)</label>
                <input type="number" class="form-control" name="DISKON"  placeholder="DISKON">
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