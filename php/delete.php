<?php
//php script for deleting auction
session_start();
if ($_SESSION['login'] == true) {

	$artid = $_POST['artid'];

	require_once("connect.php");
	$con = connect();

	$query = mysqli_query($con, "SELECT * FROM article WHERE articleid='$artid'");
	$row = mysqli_fetch_assoc($query);
	$selid = $row['userid'];

	$user = $_SESSION['login'];
	$userid = $_SESSION['userid'];


	$sql = mysqli_query($con, "SELECT * FROM article");
	$row = mysqli_fetch_assoc($sql);
	//only admin or auction-owning user are allowed to delete article
	if ($selid == $userid OR $user == "admin") {
		$query = mysqli_query($con, "DELETE FROM article WHERE articleid='$artid'");
		if ($query == true) {
			header("Location: ../view/category/new_article.php");
		} else
			header("Location: ../view/main/auction.php");
	} else header("Location: ../index.php");
} else header("Location: ../view/user/auth_error.php");
?>
