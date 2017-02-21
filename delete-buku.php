<?php
	$ID_BUKU=$_GET['id_buku'];
	
	include("koneksi.php");

	$query = "delete from buku where ID_BUKU='$ID_BUKU'";
	$hasil = $koneksi->query($query);

	header("Location: buku.php");

?>