<?php
	require __DIR__ . '/connect.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM makanan WHERE id = '$id'";
    $query  = mysqli_query($con, $sql);

 	if ($query) {
 		header("Location: ../datamakanan.php");
   		exit;
	}
?>