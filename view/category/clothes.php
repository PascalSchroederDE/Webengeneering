<?php
session_start();

$sort = $_GET['sort'];
$order = $_GET['order'];

if($sort=="") {
  $sort = 'articleid';
}

if($order=="") {
  $order= 'ASC';
}

include('../../php/userdata_request.php');
$user_data = get_user_data();

include('../../php/article_request.php');
//getting all clothing articles
$query_string = "SELECT * FROM article WHERE category='Kleidung' ORDER BY $sort $order";
$article_data = get_article_data_by_sqlquery($query_string);

$data = array_merge($user_data, $article_data);
$data['page_title']="Kleidung";
$data['link_to_sort']="../category/clothes.php?";

require_once('../../libs/smtemplate.php');
$tpl = new SMTemplate();
$tpl->render('article_list', $data);
?>