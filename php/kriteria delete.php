<?php
	require __DIR__ . '/connect.php';

	$id = $_GET['id'];
	$kd_kriteria = "0";
	$nama = "0";

	$sql = "UPDATE kriteria SET kd_kriteria = '$kd_kriteria', nama = '$nama' WHERE id = '$id'";
    $query  = mysqli_query($con, $sql);

 	if ($query) {
 		header("Location: ../data kriteria.php");
   		exit;
	}
?>