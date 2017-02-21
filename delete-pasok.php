<?php
	$ID_PASOK=$_GET['id_pasok'];
	
	include("koneksi.php");

	$query = "delete from pasok where ID_PASOK='$ID_PASOK'";
	$hasil = $koneksi->query($query);

	header("Location: pasok.php");

?>