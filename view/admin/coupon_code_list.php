<?php
session_start();
if ($_SESSION['admin'] == 1) {

	require_once("../../php/connect.php");
	$con = connect();

	include('../../php/userdata_request.php');
	$user_data = get_user_data();



	$last_id_query = mysqli_query($con, "SELECT MAX(id) FROM coupon_codes");
	$last_id_query->data_seek(0);
	$last_id = $last_id_query->fetch_array()[0];

	$code_string = array();
	$amount = array();
	$id = array();

	$n = 1;
	$invalid = 0;

	//getting all coupon codes
	for ($i = 1; $i <= $last_id; $i++) {
		$id = $i;
		$query = mysqli_query($con,"SELECT * FROM coupon_codes WHERE id='$id'");
		$num = mysqli_num_rows($query);
		if ($num != 0) {
			WHILE ($row = mysqli_fetch_assoc($query)) {
				$code = $row["code"];

				//splitting into substrings by length of 4; merging with seperator "-"
				$cs1=substr("$code",0,4);
				$cs2=substr("$code",4,4);
				$cs3=substr("$code",8,4);
				$cs4=substr("$code",12,4);
				$code_string[$n]="$cs1-$cs2-$cs3-$cs4";

				$amount[$n] = $row["amount"];
				$code_id[$n] = $i;
				$n++;
			}
		} else {
			$invalid++;
		}
	}

	$repetitions = $last_id - $invalid;
	$code_data = array(
		'code'=>$code_string,
		'amount'=>$amount,
		'id'=>$code_id,
		'rep'=>$repetitions
	);

	$data = array_merge($user_data,$code_data);

	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('coupon_codes', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>