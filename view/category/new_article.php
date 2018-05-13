<?php
session_start();

include('../../php/userdata_request.php');
$user_data = get_user_data();

include('../../php/article_request.php');
//getting 5 newest articles
$query_string = "SELECT * FROM article ORDER BY articleid DESC LIMIT 5";
$article_data = get_article_data_by_sqlquery($query_string);

$data = array_merge($user_data, $article_data);
$data['page_title']="Neue Angebote";

require_once('../../libs/smtemplate.php');
$tpl = new SMTemplate();
$tpl->render('article_list', $data);

?>