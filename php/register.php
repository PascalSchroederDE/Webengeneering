<?php
//script for user registration
session_start();
if ($_SESSION['login'] != true) {

	//getting entered data
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pw = $_POST['pw'];
	$rep_pw = $_POST['rep_pw'];
	$register = $_POST['register'];
	$prename = $_POST['prename'];
	$name = $_POST['name'];
	$check = $_POST['agb'];

	$email_rex = '/\w+[@]\w+[.]\w{2,3}/';
	$username_rex = '/[a-z0-9?&=_.!äöüß-]$/i';
	$pw_rex = '/[a-z0-9?=.-_!%$§&ä()}{^öüß-]$/i';
	$prename_rex = '/[a-zäöüß-]$/i';
	$name_rex = '/[a-zäöüß-]$/i';

	$nSEX = $_POST['sex'];
	switch ($nSEX) {
		case "männlich":
			$sex = "männlich";
			break;
		case "weiblich":
			$sex = "weiblich";
			break;
		default:
			$sex = "";
	}

	$nTITLE = $_POST['title'];
	switch ($nTITLE) {
		case "Doktor":
			$title = "Doktor";
			break;
		case "Professor":
			$title = "Professor";
			break;
		default:
			$title = "";
	}

	// calculating age
	$timestamp = time();

	$b_day = @intval($_POST['day']);
	$b_month = @intval($_POST['month']);
	$b_year = @intval($_POST['year']);
	$mkbirthdate = mktime(0, 0, 0, $b_month, $b_day, $b_year);
	$birthdate = date("Y-m-d", $mkbirthdate);
	$date = date("Y-m-d", $timestamp);

	$time = date("H:i", $timestamp);

	$age = floor((date("Ymd") - date("Ymd", $mkbirthdate)) / 10000);


	if ($register) {
		if ($email AND $user AND $pw AND $rep_pw AND $prename AND $name AND $b_day AND $b_month AND $b_year AND $check == "TRUE" AND preg_match($username_rex, $user) AND preg_match($pw_rex, $pw) AND preg_match($email_rex, $email) AND preg_match($prename_rex, $prename) AND preg_match($name_rex, $name)) {
			if ($pw == $rep_pw) {
				//if user is older than 16
				if ($age >= 16) {
					require_once("connect.php");
					$con = connect();

					$sql = mysqli_query($con, "SELECT * FROM user WHERE username='$user'");
					$num = mysqli_num_rows($sql);

					//if user already exists
					if ($num != 0) {
						header("Location: ../view/user/register.php");
					} else {
						//hashing pw
						$pass = hash('sha256', $pw);
						//insert data into table
						$query = mysqli_query($con, "INSERT INTO user (email,username,password,prename,name,title,sex,birthdate,dateofcre,timeofcre) VALUES ('$email','$user','$pass','$prename','$name','$title','$sex','$birthdate','$date','$time')") or die ("Update query failed: " . mysql_error());                    /*Daten werden in Tabelle eingefügt*/
						if ($query == true) {
							//generate row for user in credit table; start credits set to 0
							$newuserid_q = mysqli_query($con, "SELECT * FROM user WHERE id=(
  								SELECT max(id) FROM user
    						)");
							$newuserid_row = mysqli_fetch_assoc($newuserid_q);
							$newuserid = $newuserid_row['id'];
							$credit_q = mysqli_query($con, "INSERT INTO credit (userid, credit) VALUES ('$newuserid', 0)");
							if ($credit_q == true) {
								//starting session
								$_SESSION['prename'] = $prename;
								$userid_query = mysqli_query($con, "SELECT MAX(id) FROM user");
								$userid_query->data_seek(0);
								$_SESSION['userid'] = $userid_query->fetch_array()[0];
								$_SESSION['login'] = $user;
								header("Location: ../index.php?'$newuserid'");
							} else header("Location: ../view/user/register.php");
						} else header("Location: ../view/user/register.php");
					}
				} else header("Location: ../view/user/register.php");
			} else header("Location: ../view/user/register.php");
		} else header("Location: ../view/user/register.php");
	} else header("Location: ../view/user/register.php");
} else header("Location: ../view/user/auth_error.php");
?>