<?php
session_start();
if ($_SESSION['login'] == true) {
	session_start();

	require_once("../../php/connect.php");
	$con = connect();

	include('../../php/userdata_request.php');
	$user_data = get_user_data();

	$last_id_query = mysqli_query($con, "SELECT MAX(articleid) FROM article");
	$last_id_query->data_seek(0);
	$last_id = $last_id_query->fetch_array()[0];

	$userid = $_SESSION['userid'];
	$seller_id = array();
	$buyer_id = array();
	$seller = array();
	$buyer = array();
	$art_title_buy = array();
	$art_title_sale = array();
	$art_price_buy = array();
	$art_price_sale = array();
	$del_price_buy = array();
	$del_price_sale = array();
	$date_buy = array();
	$date_sale = array();

	$counter_purchases = $last_id;
	$invalid_purchases = 0;

	//getting all buys
	for ($i = $last_id; $i > 0; $i--) {
		$id = $i;
		$query_purchases = mysqli_query($con, "SELECT * FROM buy_list WHERE id=$id AND buyer_id=$userid");
		$num_purchases = mysqli_num_rows($query_purchases);
		if ($num_purchases != 0) {
			WHILE ($row_purchases = mysqli_fetch_assoc($query_purchases)) {
				$seller_id[$counter_purchases] = $row_purchases['seller_id'];
				$query_seller = mysqli_query($con, "SELECT username FROM user WHERE id=$seller_id[$counter_purchases]");
				$row_seller = mysqli_fetch_assoc($query_seller);
				$seller[$counter_purchases] = $row_seller['username'];
				$art_title_buy[$counter_purchases] = $row_purchases['article_title'];
				$art_price_buy[$counter_purchases] = $row_purchases['article_price'];
				$del_price_buy[$counter_purchases] = $row_purchases['delivery_price'];
				$date_buy[$counter_purchases] = $row_purchases['date'];
				$counter_purchases--;
			}
		} else {
			$invalid_purchases++;
		}
	}

	$counter_sales = $last_id;
	$invalid_sales = 0;

	//getting all sells
	for ($is = $last_id; $is > 0; $is--) {
		$id = $is;
		$query_sales = mysqli_query($con, "SELECT * FROM buy_list WHERE id=$id AND seller_id=$userid");
		$num_sales = mysqli_num_rows($query_sales);
		if ($num_sales != 0) {
			WHILE ($row_sales = mysqli_fetch_assoc($query_sales)) {
				$buyer_id[$counter_sales] = $row_sales['buyer_id'];
				$query_buyer = mysqli_query($con, "SELECT username FROM user WHERE id=$buyer_id[$counter_sales]");
				$row_buyer = mysqli_fetch_assoc($query_buyer);
				$buyer[$counter_sales] = $row_buyer['username'];
				$art_title_sale[$counter_sales] = $row_sales['article_title'];
				$art_price_sale[$counter_sales] = $row_sales['article_price'];
				$del_price_sale[$counter_sales] = $row_sales['delivery_price'];
				$date_sale[$counter_sales] = $row_sales['date'];
				$counter_sales--;
			}
		} else {
			$invalid_sales++;
		}
	}

	$purchase_data = array(
		'seller_id' => $seller_id,
		'seller' => $seller,
		'art_title_buy' => $art_title_buy,
		'art_price_buy' => $art_price_buy,
		'del_price_buy' => $del_price_buy,
		'date_buy' => $date_buy,
		'invalid_purchases' => $invalid_purchases
	);

	$sales_data = array(
		'buyer_id' => $buyer_id,
		'buyer' => $buyer,
		'art_title_sale' => $art_title_sale,
		'art_price_sale' => $art_price_sale,
		'del_price_sale' => $del_price_sale,
		'date_sale' => $date_sale,
		'invalid_sales' => $invalid_sales
	);

	$data = array_merge($user_data, $purchase_data, $sales_data);
	$data['last_id'] = $last_id;

	require_once('../../libs/smtemplate.php');
	$tpl = new SMTemplate();
	$tpl->render('purchases_log', $data);
} else {
	header("Location: ../user/auth_error.php");
}
?>