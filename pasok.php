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
                    <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">ID DISTRIBUTOR <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">ID BUKU <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">JUMLAH PASOK <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TANGGAL PASOK <span class="caret"></span></a></td>
                    
                    <td>Delete</td>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                    include("koneksi.php");
                    $query = "select * from pasok ORDER BY ID_PASOK ASC";
                    $hasil = $koneksi->query($query);

                    if ($hasil->num_rows > 0) {
                      foreach ($hasil as $row) {
                        echo "<tr>
                        <td>".$row['ID_PASOK']."</td>
                        <td>".$row['ID_DISTRIBUTOR']."</td>
                        <td>".$row['ID_BUKU']."</td>
                        <td>".$row['JUMLAH_PASOK']."</td>
                        <td>".$row['TANGGAL_PASOK']."</td>";
                        echo '<td><a href="delete-pasok.php?id_pasok='.$row['ID_PASOK'].'" class="templatemo-edit-btn">Delete</a></td>
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
                <a href="tambah-pasok.php" class="btn btn-sm btn-warning">Tambah Data</a>
              </div>     
            </div>                          
          </div>
           
          <?php
            include "footer.php";
          ?>