<?php
	require __DIR__ . '/connect.php';

	$kd_makanan		= $_POST['kd_makanan'];
	$nama			= $_POST['nama'];

	$sql = "INSERT INTO makanan SET kd_makanan='$kd_makanan', nama='$nama', nilai_makanan1='1', nilai_makanan2='1', nilai_makanan3='1', nilai_makanan4='1'";
    $query  = mysqli_query($con, $sql);

	header("location:../datamakanan.php");
?>