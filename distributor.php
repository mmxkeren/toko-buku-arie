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
                    <td><a href="" class="white-text templatemo-sort-by">ID DISTRIBUTOR <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">NAMA DISTRIBUTOR <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">ALAMAT DISTRIBUTOR <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TELEPON DISTRIBUTOR <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                    include("koneksi.php");
                    $query = "select * from distributor ORDER BY ID_DISTRIBUTOR ASC";
                    $hasil = $koneksi->query($query);

                    if ($hasil->num_rows > 0) {
                      foreach ($hasil as $row) {
                        echo "<tr>
                        <td>".$row['ID_DISTRIBUTOR']."</td>
                        <td>".$row['NAMA_DISTRIBUTOR']."</td>
                        <td>".$row['ALAMAT_DISTRIBUTOR']."</td>
                        <td>".$row['TELEPON_DISTRIBUTOR']."</td>";
                        echo '<td><a href="update-distributor.php?id_distributor='.$row['ID_DISTRIBUTOR'].'" class="templatemo-edit-btn">Edit</a></td>
                          <td><a href="delete-distributor.php?id_distributor='.$row['ID_DISTRIBUTOR'].'" class="templatemo-edit-btn">Delete</a></td>
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
                  <a href="tambah-distributor.php" class="btn btn-sm btn-warning">Tambah Data</a>
                </div>    
            </div>                          
          </div> 
           
          <?php
            include "footer.php";
          ?>