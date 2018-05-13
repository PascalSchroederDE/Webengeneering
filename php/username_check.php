<?php
//check if username is already in use
require_once("connect.php");
$con = connect();

$user = $_GET['name'];
$sql = mysqli_query($con,"SELECT * FROM user");
$row = mysqli_fetch_assoc($sql);
$check = false;
		
if ($row["username"]==$user) {
    $check = true;
} else {
    $check = false;
}
		
		
?>