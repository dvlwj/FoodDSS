<?php
	require __DIR__ . '/connect.php';

	$skala 		= $_POST['skala'];
	$variabel 	= $_POST['variabel'];
	$variabel2	= $_POST['variabel2'];

	if ($variabel == 1) {
		$sql = "UPDATE makanan SET nilai_makanan1 = '$skala' WHERE id = '$variabel2'";
    	$query  = mysqli_query($con, $sql);
	} elseif ($variabel == 2) {
		$sql = "UPDATE makanan SET nilai_makanan2 = '$skala' WHERE id = '$variabel2'";
    	$query  = mysqli_query($con, $sql);
	} elseif ($variabel == 3) {
		$sql = "UPDATE makanan SET nilai_makanan3 = '$skala' WHERE id = '$variabel2'";
    	$query  = mysqli_query($con, $sql);
	} elseif ($variabel == 4) {
		$sql = "UPDATE makanan SET nilai_makanan4 = '$skala' WHERE id = '$variabel2'";
    	$query  = mysqli_query($con, $sql);
	} else {
		header("Location: ../nilai makanan.php");
   		exit;
	}

 	if ($query) {
 		header("Location: ../nilai makanan.php");
   		exit;
	}
?>