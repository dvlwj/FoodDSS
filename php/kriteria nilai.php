<?php
	require __DIR__ . '/connect.php';

	$id 		= 1;
	$skala 		= $_POST['skala'];
	$variabel 	= $_POST['variabel'];
	$variabel2	= $_POST['variabel2'];

	if (($variabel == 1 || $variabel == 2) && ($variabel2 == 1 || $variabel2 == 2) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaikrit SET lem_pro = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} elseif (($variabel == 3 || $variabel == 1) && ($variabel2 == 1 || $variabel2 == 3) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaikrit SET kar_pro = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} elseif (($variabel == 3 || $variabel == 2) && ($variabel2 == 2 || $variabel2 == 3) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaikrit SET kar_lem = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} elseif (($variabel == 4 || $variabel == 1) && ($variabel2 == 1 || $variabel2 == 4) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaikrit SET ser_pro = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} elseif (($variabel == 4 || $variabel == 2) && ($variabel2 == 2 || $variabel2 == 4) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaikrit SET ser_lem = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} elseif (($variabel == 4 || $variabel == 3) && ($variabel2 == 3 || $variabel2 == 4) && ($variabel != $variabel2)) {
		$sql = "UPDATE nilaikrit SET ser_kar = '$skala' WHERE id = '$id'";
    	$query  = mysqli_query($con, $sql);
	} else {
		header("Location: ../nilai kriteria.php");
   		exit;
	}

 	if ($query) {
 		header("Location: ../nilai kriteria.php");
   		exit;
	}
?>