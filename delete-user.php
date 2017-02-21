<?php
	$ID_KASIR=$_GET['id_kasir'];
	
	include("koneksi.php");

	$query = "delete from kasir where ID_KASIR='$ID_KASIR'";
	$hasil = $koneksi->query($query);

	header("Location: manage-users.php");

?>