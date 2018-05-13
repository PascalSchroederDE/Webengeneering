<?php
//php script for buying article
session_start();
if ($_SESSION['login'] == true) {

	$buyerid = $_SESSION['userid'];

	$articleid = $_POST['id_article'];
	$buy = $_POST['buy'];

	require_once("connect.php");
	$con = connect();

	$querysi = mysqli_query($con, "SELECT * FROM article WHERE articleid='$articleid'");
	$rowsi = mysqli_fetch_assoc($querysi);
	$sellerid = $rowsi['userid'];

	if ($buy) {
		if ($buyerid != $sellerid) {

			$query_article_price = mysqli_query($con, "SELECT * FROM article WHERE articleid='$articleid'");
			$row_art = mysqli_fetch_assoc($query_article_price);
			$art_prod_price = $row_art['price'];
			$art_del_price = $row_art['deliveryprice'];
			$art_price = $art_prod_price + $art_del_price;
			$art_title = $row_art['title'];

			$query_credit_seller = mysqli_query($con, "SELECT credit FROM credit WHERE userid='$sellerid'");
			$query_credit_buyer = mysqli_query($con, "SELECT credit FROM credit WHERE userid='$buyerid'");

			$row_cred_seller = mysqli_fetch_assoc($query_credit_seller);
			$cred_seller_act = $row_cred_seller['credit'];
			$credit_seller = $cred_seller_act + $art_price;

			//calculating new credit of buyer
			$row_cred_buyer = mysqli_fetch_assoc($query_credit_buyer);
			$cred_buyer_act = $row_cred_buyer['credit'];
			$credit_buyer = $cred_buyer_act - $art_price;

			$date = date("Y-m-d H:i:s", time());

			//if new credit of buyer is at least 0, then continuing with transaction
			if ($credit_buyer >= 0) {
				//transfering credits from buyer to seller; adding article to sell-log; deleting article from article-to-sell list
				$query_seller = mysqli_query($con, "UPDATE credit SET credit='$credit_seller' WHERE userid='$sellerid'") or die ("Update query failed: " . mysql_error());
				$query_buyer = mysqli_query($con, "UPDATE credit SET credit='$credit_buyer' WHERE userid='$buyerid'") or die ("Update query failed: " . mysql_error());
				$query_buylist = mysqli_query($con, "INSERT INTO buy_list (seller_id, buyer_id, article_id, article_title, article_price, delivery_price, date) VALUES ('$sellerid','$buyerid','$articleid','$art_title','$art_prod_price','$art_del_price','$date')") or die ("Update query failed: " . mysql_error());
				$query_delete = mysqli_query($con, "DELETE FROM article WHERE articleid='$articleid'");
				header("Location: ../index.php");
			} else header("Location: ../../category/new_article.php");
		} else header("Location: ../../category/new_article.php");
	} else header("Location: ../../category/new_article.php");
} else header("Location: ../../category/new_article.php");
?>