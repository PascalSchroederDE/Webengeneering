<?php
//login script
session_start();
if ($_SESSION['login'] != true) {
	$user = $_POST['user'];
	$pw = $_POST['pass'];
	$login = $_POST['login'];

	$username_rex = '/[a-z0-9?&=_.!-]$/i';
	$pw_rex = '/[a-z0-9?=.-_!%$�&()}{^-]$/i';

	$error = false;

	if ($login) {
		//checking regex of input for security reasons
		if ($user AND $pw AND preg_match($username_rex, $user) AND preg_match($pw_rex, $pw)) {
			require_once("connect.php");
			$con = connect();

			//searching user in database
			$query = mysqli_query($con, "SELECT * FROM user WHERE username='$user'");
			$num = mysqli_num_rows($query);

			//if user exists
			if ($num != 0) {

				WHILE ($row = mysqli_fetch_assoc($query)) {
					//writing important information of user in vars for using that after login (e.g. for greeting)
					$dbprename = $row['prename'];
					$dbid = $row['id'];
					$dbuser = $row['username'];
					$dbpw = $row['password'];
					$admin = $row['admin'];
				}
				$pass = hash("sha256", $pw);
				//if entered pw matches pw in database, writing initialized vars in session
				if ($dbuser == $user AND $dbpw == $pass) {
					$_SESSION['prename'] = $dbprename;
					$_SESSION['userid'] = $dbid;
					$_SESSION['login'] = $user;
					$_SESSION['admin'] = $admin;
					header("Location: ../index.php?");
				} else {
					header("Location: ../view/user/login_error.php");
				}
			} else {
				header("Location: ../view/user/login_error.php");
			}
		} else {
			header("Location: ../view/user/login_error.php");
		}
	} else {
		header("Location: ../view/user/login_error.php");
	}
} else {
	header("Location: ../view/user/login_error.php");
}
?>