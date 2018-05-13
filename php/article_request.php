<?php
//function for getting article data out of article table by given sql query string
function get_article_data_by_sqlquery($query_string)
{
	require_once("connect.php");

	$con = connect();

	$title = array();
	$price = array();
	$delprice = array();
	$deltime = array();
	$condition = array();

	$n = 0;
	$query = mysqli_query($con, $query_string);
	$num = mysqli_num_rows($query);
	WHILE ($row = mysqli_fetch_assoc($query)) {
		$n++;
		$id[$n] = $row['articleid'];
		$title[$n] = $row['title'];
		$price[$n] = $row['price'];
		$delprice[$n] = $row['deliveryprice'];
		$deltime[$n] = $row['deliverytime'];
		$condition[$n] = $row['artcondition'];
	}

	$data = array(
		'amount' => $n,
		'id' => $id,
		'title' => $title,
		'price' => $price,
		'delprice' => $delprice,
		'deltime' => $deltime,
		'condition' => $condition
	);

	return $data;
}

?>