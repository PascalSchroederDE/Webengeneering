<?php
//script for changing default address
session_start();
if ($_SESSION['login'] == true) {

	$userid = $_SESSION['userid'];

	$submit = $_POST['def'];
	$id = $_POST['adid'];

	if ($submit) {
		require_once("connect.php");
		$con = connect();

		//change currently default address to def=false and new default address to def=true
		$query_I = mysqli_query($con, "UPDATE address SET def=0 WHERE userid='$userid'") OR die(mysqli_error($con));
		$query_II = mysqli_query("UPDATE address SET def=1 WHERE id='$id'") OR die(mysqli_error($con));
		header("location: ../index.php");

	} else header("Location: ../index.php");
} else header("Location: ../view/user/auth_error.php");
			
			