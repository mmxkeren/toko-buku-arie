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
                    <td><a href="" class="white-text templatemo-sort-by">ID PENJUALAN <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">ID BUKU <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">ID KASIR <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">JUMLAH PENJUALAN <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TOTAL PENJUALAN <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TANGGAL PENJUALAN <span class="caret"></span></a></td>
                    <td>Delete</td>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                    include("koneksi.php");
                    $query = "select * from penjualan ORDER BY ID_PENJUALAN ASC";
                    $hasil = $koneksi->query($query);

                    if ($hasil->num_rows > 0) {
                      foreach ($hasil as $row) {
                        echo "<tr>
                        <td>".$row['ID_PENJUALAN']."</td>
                        <td>".$row['ID_BUKU']."</td>
                        <td>".$row['ID_KASIR']."</td>
                        <td>".$row['JUMLAH_PENJUALAN']."</td>
                        <td>".$row['TOTAL_PENJUALAN']."</td>
                        <td>".$row['TANGGAL_PENJUALAN']."</td>";
                        echo '<td><a href="delete-penjualan.php?id_penjualan='.$row['ID_PENJUALAN'].'" class="templatemo-edit-btn">Delete</a></td>
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
                  <a href="tambah-penjualan.php" class="btn btn-sm btn-warning">Tambah Data</a>
                </div>     
            </div>                          
          </div> 
           
          <?php
            include "footer.php";
          ?>