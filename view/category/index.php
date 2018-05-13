<?php
session_start();

include('../../php/userdata_request.php');
$data = get_user_data();

require_once('../../libs/smtemplate.php');
$tpl = new SMTemplate();
$tpl->render('category', $data);
?>