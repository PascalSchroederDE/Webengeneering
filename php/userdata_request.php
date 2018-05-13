<?php
// script for getting userdata with session-userid
function get_user_data() {
    require_once("connect.php");
    $con = connect();

    $userid = $_SESSION['userid'];

    $credit_query = mysqli_query($con, "SELECT credit FROM credit WHERE userid='$userid'");

    $row_credit = mysqli_fetch_assoc($credit_query);

    $credit = $row_credit['credit'];

    $data = array(
    	'userid' => $userid,
        'login' => $_SESSION['login'],
        'username' => $_SESSION['prename'],
        'credit' => $credit,
	    'user_is_admin' => $_SESSION['admin']==1
    );

    return $data;
}
?>