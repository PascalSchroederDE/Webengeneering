<?php
session_start();

$search = $_GET['search'];
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
//getting all articles in which searched input exists in title
$query_string = "SELECT * FROM article WHERE title REGEXP '$search' ORDER BY $sort $order";
$article_data = get_article_data_by_sqlquery($query_string);

$data = array_merge($user_data, $article_data);
$data['page_title']="Suche: $search";
$data['link_to_sort']="../category/search.php?search=$search&";

require_once('../../libs/smtemplate.php');
$tpl = new SMTemplate();
$tpl->render('article_list', $data);
?>
