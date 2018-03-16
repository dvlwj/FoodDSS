<?php
	require __DIR__ . '/connect.php';

	$id = $_POST['id'];
	$kd_subkriteria = $_POST['kd_subkriteria'];
	$nama = $_POST['nama'];

	$sql = "UPDATE subkriteria SET kd_subkriteria = '$kd_subkriteria', nama = '$nama' WHERE id = '$id'";
    $query  = mysqli_query($con, $sql);

 	if ($query) {
 		header("Location: ../data subkriteria.php");
   		exit;
	}
?>