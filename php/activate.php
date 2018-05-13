<?php
//php script for activating coupon codes (only for admin)
session_start();

if ($_SESSION['admin'] == 1) {

	require_once("connect.php");
	$con = connect();

	$id = $_POST['id'];
	$submit = $_POST['activate'];

	$query = mysqli_query($con, "SELECT * FROM coupon_codes WHERE id='$id'");
	$row = mysqli_fetch_assoc($query);
	$code = $row['code'];
	$amount = $row['amount'];

	//move coupon code from inactive to active table
	if ($id AND $submit AND $code AND $amount) {
		$query_insert = mysqli_query($con, "INSERT INTO coupon_codes_active  (code, amount) VALUES ('$code', '$amount')") or die (mysqli_error($con));
		$query_delete = mysqli_query($con, "DELETE FROM coupon_codes WHERE id='$id'") or die (mysqli_error($con));
	}
	header("Location: ../view/admin/coupon_code_list.php");
} else header("Location: ../view/user/auth_error.php");

?>