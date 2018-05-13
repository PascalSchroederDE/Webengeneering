<?php
session_start();

require_once("../../php/connect.php");
$con = connect();

include('../../php/userdata_request.php');
$user_data = get_user_data();

//getting newest article
$last_id_query = mysqli_query($con,"SELECT MAX(articleid) FROM article");
$last_id_query->data_seek(0);
$last_id = $last_id_query->fetch_array()[0];

$title = mysqli_query($con,"SELECT title FROM article ORDER BY 'id' WHERE id=$last_id");

require_once('../../libs/smtemplate.php');
$data = array_merge($user_data, array(
    'id' => $last_id,
    'title' => $title[$last_id],
));
$tpl = new SMTemplate();
$tpl->render('start', $data);
?>
