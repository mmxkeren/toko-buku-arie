<?php
  include "header.php";
?>
<!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">ID BUKU <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">JUDUL <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">NOISBN <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">PENULIS <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">PENERBIT <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TAHUN <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">STOK <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">HARGA POKOK <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">HARGA JUAL <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">PPN<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">DISKON <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                    include("koneksi.php");
                    $query = "select * from buku ORDER BY ID_BUKU ASC";
                    $hasil = $koneksi->query($query);

                    if ($hasil->num_rows > 0) {
                      foreach ($hasil as $row) {
                        echo "<tr>
                        <td>".$row['ID_BUKU']."</td>
                        <td>".$row['JUDUL']."</td>
                        <td>".$row['NOISBN']."</td>
                        <td>".$row['PENULIS']."</td>
                        <td>".$row['PENERBIT']."</td>
                        <td>".$row['TAHUN']."</td>
                        <td>".$row['STOK']."</td>
                        <td>".$row['HARGA_POKOK']."</td>
                        <td>".$row['HARGA_JUAL']."</td>
                        <td>".$row['PPN']."</td>
                        <td>".$row['DISKON']."</td>";
                        
                        echo '<td><a href="update-buku.php?id_buku='.$row['ID_BUKU'].'" class="templatemo-edit-btn">Edit</a></td>
                          <td><a href="delete-buku.php?id_buku='.$row['ID_BUKU'].'" class="templatemo-edit-btn">Delete</a></td>
                        </tr>';
                    } 
                   } else { 
                    echo "0 results"; 
                   } $koneksi->close(); 
                   ?>
                
                </tbody>
              </table>
              <br/>
                <div class="form-group text-center">
                  <a href="tambah-buku.php" class="btn btn-sm btn-warning">Tambah Data</a>
                </div>    
            </div>                          
          </div> 
           
          <?php
            include "footer.php";
          ?>