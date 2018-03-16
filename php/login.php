<?php

	session_start();

	require __DIR__ . '/connect.php';

	$username = $_POST['username'];

	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query  = mysqli_query($con, $sql);
    $row = mysqli_num_rows($query);

	if($row > 0) {
		$_SESSION['username'] = $username;

		header("location:../home.php");
	} else {
		header("location:../index.html");
	}
?>