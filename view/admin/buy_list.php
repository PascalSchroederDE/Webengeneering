<?php
session_start();
if ($_SESSION['admin'] == 1) {

	include('../../php/userdata_request.php');
	$user_data = get_user_data();

	require_once("../../php/connect.php");
	$con = connect();


	$last_id_query = mysqli_query($con, "SELECT MAX(id) FROM buy_list");
	$last_id_query->data_seek(0);
	$last_id = $last_id_query->fetch_array()[0];

	$seller_id = array();
	$buyer_id = array();
	$seller = array();
	$buyer = array();
	$art_title = array();
	$art_price = array();
	$del_price = array();
	$date = array();

	$n = $last_id;
	$invalid = 0;

	//get all sells with belonging information
	for ($i = $last_id; $i > 0; $i--) {
		$query = mysqli_query($con, "SELECT * FROM buy_list WHERE id='$i'");
		$num = mysqli_num_rows($query);
		if ($num != 0) {
			WHILE ($row = mysqli_fetch_assoc($query)) {
				$seller_id[$n] = $row['seller_id'];
				$buyer_id[$n] = $row['buyer_id'];

				$query_seller = mysqli_query($con, "SELECT username FROM user WHERE id='$seller_id[$n]'");
				$row_seller = mysqli_fetch_assoc($query_seller);
				$seller[$n] = $row_seller['username'];

				$query_buyer = mysqli_query($con, "SELECT username FROM user WHERE id='$buyer_id[$n]'");
				$row_buyer = mysqli_fetch_assoc($query_buyer);
				$buyer[$n] = $row_buyer['username'];

				$art_title[$n] = $row['article_title'];
				$art_price[$n] = $row['article_price'];
				$del_price[$n] = $row['delivery_price'];
				$date[$n] = $row['date'];
				$n--;
			}
		} else {
			$invalid++;
		}
	}

	$article_data = array(
		'seller_id'=>$seller_id,
		'buyer_id'=>$buyer_id,
		'seller'=>$seller,
		'buyer'=>$buyer,
		'art_title'=>$art_title,
		'art_price'=>$art_price,
		'del_price'=>$del_price,
		'date'=>$date,
		'invalid'=>$invalid,
		'last_id'=>$last_id
	);
	$data = array_merge($user_data,$article_data);

	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('buy_list', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>