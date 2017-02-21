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
                    <td><a href="" class="white-text templatemo-sort-by">Nama Kasir <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Alamat Kasir <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Telepon Kasir <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Status <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Username <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                    include("koneksi.php");
                    $query = "select * from kasir ORDER BY ID_KASIR ASC";
                    $hasil = $koneksi->query($query);

                    if ($hasil->num_rows > 0) {
                      foreach ($hasil as $row) {
                        echo "<tr>
                        <td>".$row['ID_KASIR']."</td>
                        <td>".$row['NAMA_KASIR']."</td>
                        <td>".$row['ALAMAT_KASIR']."</td>
                        <td>".$row['TELEPON_KASIR']."</td>
                        <td>".$row['STATUS']."</td>
                        <td>".$row['USERNAME']."</td>";
                        
                        echo '<td><a href="update-user.php?id_kasir='.$row['ID_KASIR'].'" class="templatemo-edit-btn">Edit</a></td>
                          <td><a href="delete-user.php?id_kasir='.$row['ID_KASIR'].'" class="templatemo-edit-btn">Delete</a></td>
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
                  <a href="tambah-user.php" class="btn btn-sm btn-warning">Tambah Data</a>
                </div>  
            </div>
          </div> 
          <?php
            include "footer.php";
          ?>