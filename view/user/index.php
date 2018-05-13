<?php
session_start();
if ($_SESSION['login'] == true) {

	$userid = $_SESSION['userid'];

	require_once("../../php/connect.php");
	$con = connect();

	include('../../php/userdata_request.php');
	$user_data = get_user_data();

	$query_user = mysqli_query($con, "SELECT * FROM user WHERE id=$userid");
	$num_user = mysqli_num_rows($query_user);
	if ($num_user != 0) {
		WHILE ($row = mysqli_fetch_assoc($query_user)) {
			$mail = $row['email'];
			$user = $row['username'];
			$prename = $row['prename'];
			$name = $row['name'];
			$sex_tmp = $row['sex'];
			if ($sex_tmp == "") {
				$sex = "<i>nicht angegeben</i>";
			} else {
				$sex = $sex_tmp;
			}
			$birth = $row['birthdate'];
		}
	} else {
		header("Location: ../user/auth_error.php");
	}

	$query_address = mysqli_query($con, "SELECT * FROM address WHERE userid=$userid");
	$num_address = mysqli_num_rows($query_address);

	$def_address_query = mysqli_query($con, "SELECT * FROM address WHERE userid='$userid' AND def=1");
	$def_address_row = mysqli_fetch_assoc($def_address_query);
	$def_address_id = $def_address_row['id'];

	$n = 1;
	WHILE ($row = mysqli_fetch_assoc($query_address)) {
		$zip[$n] = $row['zip'];
		$city[$n] = $row['city'];
		$street[$n] = $row['street'];
		$number[$n] = $row['number'];
		$id[$n] = $row['id'];
		if ($id[$n] == $def_address_id) {
			$default_address = $n;
		}
		$n++;
	}

	$user_settings_data = array(
		'mail' => $mail,
		'user' => $user,
		'prename' => $prename,
		'name' => $name,
		'sex' => $sex,
		'birth' => $birth,
		'zip' => $zip,
		'city' => $city,
		'street' => $street,
		'number' => $number,
		'default_address' => $default_address,
		'address_amount' => $num_address
	);

	$data = array_merge($user_data, $user_settings_data);
	$data['admin'] = $_SESSION['admin']==1;
	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('settings', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>