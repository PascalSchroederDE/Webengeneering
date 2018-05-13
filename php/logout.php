<?php
//destroy session => logging out
session_start();
if($_SESSION['login']==true) {
  {
	session_destroy();
	header("Location: ../index.php");
  }
} else header("Location: ../view/user/auth_error.php");

?>