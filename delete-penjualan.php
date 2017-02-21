<?php
	$ID_PENJUALAN=$_GET['id_penjualan'];
	
	include("koneksi.php");

	$query = "delete from penjualan where ID_PENJUALAN='$ID_PENJUALAN'";
	$hasil = $koneksi->query($query);

	header("Location: penjualan.php");

?>