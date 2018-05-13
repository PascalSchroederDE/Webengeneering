<?php
//php script for adding address to user profile
session_start();
if ($_SESSION['login'] == true) {
	$userid = $_SESSION['userid'];

	$zip = $_POST['zip'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$number = $_POST['number'];
	$submit = $_POST['save'];

	if ($submit) {
		require_once("connect.php");
		$con = connect();

		//adding new address and setting new default address to new address
		if ($zip AND $city AND $street AND $number) {
			$query_update_def = mysqli_query($con, "UPDATE address SET def=0 WHERE userid='$userid'");
			$query_insert = mysqli_query($con, "INSERT INTO address (userid, zip, city, street, number, def) VALUES ('$userid','$zip','$city','$street','$number', 1)") or die ("Update query failed: " . mysqli_error($con));
			if ($query_I == true AND $query_II == true) {
				header("location: ../index.php");
			}
		} else {
			header("Location: ../index.php");
		}
	} else {
		header("Location: ../index.php");
	}
} else header("Location: ../view/user/auth_error.php");
