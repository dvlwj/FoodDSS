<?php

	$con = @mysqli_connect("localhost", "root", "", "food_dss");

	if (!$con) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}
?>