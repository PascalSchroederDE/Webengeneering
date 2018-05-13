<?php
//php scrip for generating new coupon codes
session_start();

if ($_SESSION['admin'] == 1) {
	$submit = $_POST["generate"];
	$rep = $_POST["repeat"];
	$amount_raw = $_POST["amount"];

	switch ($amount_raw) {
		case "10":
			$amount = "10";
			break;
		case "50":
			$amount = "50";
			break;
		case "100":
			$amount = "100";
			break;
		default:
			$amount = "0";
	}

	require_once("connect.php");
	$con = connect();

	mt_srand((double)microtime() * 1000000);

	//set of possible signs of coupon
	$set = "ABCDEFGHIKLMNPQRSTUVWXYZ1234567890";

	//create as many new coupon codes as admin entered
	for ($n = 1; $n <= $rep; $n++) {
		for ($i = 1; $i <= 16; $i++) {
			$code[$n] .= $set[mt_rand(0, (strlen($set) - 1))];
		}
		//checks if code is already existing in coupon_codes or coupon_codes_active table; repeat creation if true
		$sql_I = mysqli_query($con, "SELECT * FROM coupon_codes WHERE code='$code[$n]'");
		$num_I = mysqli_num_rows($sql_I);
		$sql_II = mysqli_query($con, "SELECT * FROM coupon_codes_active WHERE code='$code[$n]'");
		$num_II = mysqli_num_rows($sql_II);
		if ($num_I == 0 AND $num_II == 0) {
			$query = mysqli_query($con, "INSERT INTO coupon_codes (code, amount) VALUES ('$code[$n]', '$amount')");
		} else {
			$n--;
		}
	}
	header("Location: ../view/admin/coupon_code_list.php");
} else header("Location: ../view/user/auth_error.php");

?>