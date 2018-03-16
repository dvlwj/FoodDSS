<?php
	require __DIR__ . '/connect.php';

	$id = $_POST['id'];
	$kd_makanan = $_POST['kd_makanan'];
	$nama = $_POST['nama'];

	$sql = "UPDATE makanan SET kd_makanan = '$kd_makanan', nama = '$nama' WHERE id = '$id'";
    $query  = mysqli_query($con, $sql);

 	if ($query) {
 		header("Location: ../datamakanan.php");
   		exit;
	}
?>