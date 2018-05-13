<?php
session_start();
if ($_SESSION['login']!=true) {
	include('../../php/userdata_request.php');
	$data = get_user_data();

	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('login_error', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>