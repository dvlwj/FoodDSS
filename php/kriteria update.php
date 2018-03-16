<?php
	require __DIR__ . '/connect.php';

	$id = $_POST['id'];
	$kd_kriteria = $_POST['kd_kriteria'];
	$nama = $_POST['nama'];

	$sql = "UPDATE kriteria SET kd_kriteria = '$kd_kriteria', nama = '$nama' WHERE id = '$id'";
    $query  = mysqli_query($con, $sql);

 	if ($query) {
 		header("Location: ../data kriteria.php");
   		exit;
	}
?>