<?php
session_start();
if ($_SESSION['admin'] == 1) {

	require_once("../../php/connect.php");
	$con = connect();

	include('../../php/userdata_request.php');
	$user_data = get_user_data();

	$last_id_query = mysqli_query($con, "SELECT MAX(articleid) FROM article");
	$last_id_query->data_seek(0);
	$last_id = $last_id_query->fetch_array()[0];

	//getting all users
	for ($i = 1; $i <= $last_id; $i++) {
		$id = $i;
		$query = mysqli_query($con, "SELECT * FROM user WHERE id='$id'");
		$num = mysqli_num_rows($query);
		if ($num != 0) {
			WHILE ($row = mysqli_fetch_assoc($query)) {
				$username[$n] = $row["username"];
				$prename[$n] = $row["prename"];
				$secname[$n] = $row["name"];
				$name[$n] = "$prename[$n] $secname[$n]";
				$sex[$n] = $row["sex"];
				$birthdate[$n] = $row["birthdate"];
				$date = $row["dateofcre"];
				$time = $row["timeofcre"];
				$datetime[$n] = "$date - $time";
				$n++;
			}
		} else {
			$invalid++;
		}
	}

	$user_list_data = array(
		'user' => $username,
		'prename' => $prename,
		'secname' => $secname,
		'name' => $name,
		'sex' => $sex,
		'birthdate' => $birthdate,
		'datetime' => $datetime
	);

	$data = array_merge($user_data, $user_list_data);
	$data['max_count'] = $last_id - $invalid;

	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('user_list', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>