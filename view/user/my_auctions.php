<?php
session_start();
if ($_SESSION['login'] == true) {
	$userid=$_SESSION['userid'];

	include('../../php/userdata_request.php');
	$user_data = get_user_data();

	include('../../php/article_request.php');
	$query_string = "SELECT * FROM article WHERE userid=$userid";
	$article_data = get_article_data_by_sqlquery($query_string);

	$data = array_merge($user_data, $article_data);
	$data['page_title'] = "Meine Angebote";

	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('article_list', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>
