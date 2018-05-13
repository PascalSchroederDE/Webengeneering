<?php
    session_start();

    require_once('../../libs/smtemplate.php');
    $tpl = new SMTemplate();
    $tpl->render('header', $data);
?>