<?php
	require __DIR__ . '/connect.php';

	$id = $_GET['id'];
	$kd_subkriteria = "0";
	$nama = "0";

	$sql = "UPDATE subkriteria SET kd_subkriteria = '$kd_subkriteria', nama = '$nama' WHERE id = '$id'";
    $query  = mysqli_query($con, $sql);

 	if ($query) {
 		header("Location: ../data subkriteria.php");
   		exit;
	}
?>