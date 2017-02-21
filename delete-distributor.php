<?php
	$ID_DISTRIBUTOR=$_GET['id_distributor'];
	
	include("koneksi.php");

	$query = "delete from distributor where ID_DISTRIBUTOR='$ID_DISTRIBUTOR'";
	$hasil = $koneksi->query($query);

	header("Location: distributor.php");

?>