<?php
//script for checking coupon code and adding credits
session_start();
if ($_SESSION['login'] == true) {
	require_once("connect.php");
	$con = connect();

	$userid = $_SESSION['userid'];

	$coupon1 = $_POST["coupon1"];
	$coupon2 = $_POST["coupon2"];
	$coupon3 = $_POST["coupon3"];
	$coupon4 = $_POST["coupon4"];

	$code_enter = $coupon1 . $coupon2 . $coupon3 . $coupon4;


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

	$query_credit = mysqli_query($con, "SELECT * FROM credit WHERE userid='$userid'") or die (mysqli_error($con));

	$row_cred = mysqli_fetch_assoc($query_credit);
	$cred_act = $row_cred['credit'];
	$credit = $cred_act + $amount;


	$sql = mysqli_query($con, "SELECT * FROM coupon_codes_active WHERE code='$code_enter'");
	$num = mysqli_num_rows($sql);

	//check if entered coupon code exists
	if ($num != 0) {
		$sql_amount = mysqli_query($con, "SELECT * FROM coupon_codes_active WHERE code='$code_enter'") or die ("Update query failed: " . mysqli_error($con));
		$row_amount = mysqli_fetch_assoc($sql_amount);
		//check if entered amount equals amount of deposited coupon
		if ($row_amount["amount"] == $amount) {
			$query_I = mysqli_query($con, "DELETE FROM coupon_codes_active WHERE code='$code_enter'") or die ("Update query failed: " . mysqli_error($con));
			if ($query_I == true) {
				// adding credits
				$query_II = mysqli_query($con, "UPDATE credit SET credit='$credit' WHERE userid='$userid'") or die ("Update query failed: " . mysqli_error($con));
				if ($query_II == true) {
					echo("<font face='Arial'><h3>Guthaben wurde &uuml;berschrieben<br></h3> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../view/main/index.php'>hier</a> klicken)</font>");
					echo("<meta http-equiv='refresh' content='3;URL=../index.php'>");
				} else {
					echo("<font face='Arial'><h3>Übertragung fehlgeschlagen<br></h3> Versuchen sie es erneut oder melden sich beim Support <br> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../get_codes.php'>hier</a> klicken)</font>");
					echo("<meta http-equiv='refresh' content='3;URL=../get_credits.php'>");
				}
			} else {
				echo("<font face='Arial'><h3>Übertragung fehlgeschlagen<br></h3> Versuchen sie es erneut oder melden sich beim Support <br> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../get_codes.php'>hier</a> klicken)</font>");
				echo("<meta http-equiv='refresh' content='3;URL=../get_credits.php'>");
			}
		} else {
			echo("<font face='Arial'><h3>Code ung&uuml;ltig<br></h3> Versuchen sie es erneut oder melden sich beim Support <br> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../iget_codes.php'>hier</a> klicken)</font>");
			echo("<meta http-equiv='refresh' content='3;URL=../get_credits.php'>");
		}
	} else {
		echo("<font face='Arial'><h3>Code ung&uuml;ltig<br></h3> Versuchen sie es erneut oder melden sich beim Support <br> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../get_codes.php'>hier</a> klicken)</font>");
		echo("<meta http-equiv='refresh' content='3;URL=../get_credits.php'>");
	}

} else header("Location: ../view/user/auth_error.php");
?>