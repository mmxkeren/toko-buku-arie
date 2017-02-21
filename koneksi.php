<?php
$db_host = "sql6.freemysqlhosting.net";
$db_user = "sql6160055";
$db_pass = "RgkVAlD8NR";
$db_name = "sql6160055"; 
 
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
if(mysqli_connect_error()){
echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>
