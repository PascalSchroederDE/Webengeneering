<?php
session_start();
if ($_SESSION['admin'] == 1) {
	include('../../php/userdata_request.php');
	$data = get_user_data();

	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('admin', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>