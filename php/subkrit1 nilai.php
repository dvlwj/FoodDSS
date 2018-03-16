<?php
	require __DIR__ . '/connect.php';

	$id 		= 1;
	$skala 		= $_POST['skala'];
	$variabel 	= $_POST['variabel'];
	$variabel2	= $_POST['variabel2'];

	if (($variabel == 1 || $variabel == 2) && ($variabel2 == 1 || $variabel2 == 2) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaisub1 SET ba1 = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} elseif (($variabel == 3 || $variabel == 1) && ($variabel2 == 1 || $variabel2 == 3) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaisub1 SET ca1 = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} elseif (($variabel == 3 || $variabel == 2) && ($variabel2 == 2 || $variabel2 == 3) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaisub1 SET cb1 = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} else {
		header("Location: ../nilai subkriteria.php");
   		exit;
	}

 	if ($query) {
 		header("Location: ../nilai subkriteria.php");
   		exit;
	}
?>