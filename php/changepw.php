<?php
//php script for changing password
session_start();
if ($_SESSION['login'] == true) {

	$userid = $_SESSION['userid'];
	$old_pw = $_POST['oldpw'];
	$pw = $_POST['pw'];
	$rep_pw = $_POST['rep_pw'];
	$submit = $_POST['changepw'];

	$pw_rex = '/[a-z0-9?=.-_!%$�&�()}{^���-]$/i';

	if ($submit AND $pw AND $rep_pw AND $old_pw AND preg_match($pw_rex, $pw)) {
		//if new password equals repetition of new password
		if ($pw == $rep_pw) {
			require_once("connect.php");
			$con = connect();

			$pass = hash('sha256', $pw);
			$input_old_pw = hash('sha256', $old_pw);

			//getting old/current password of user
			$oldpw_query = mysqli_query($con, "SELECT password FROM user WHERE id='$userid'");
			$oldpw_query->data_seek(0);
			$oldpw = $oldpw_query->fetch_array()[0];

			//if old pw equals given input for old password (as security check)
			if ($oldpw == $input_old_pw) {

				//change password
				$query = mysqli_query($con, "UPDATE user SET password='$pass' WHERE id='$userid'");

				if ($query == true) {
					echo("<font face='Arial'><h3>Passwort erfolgreich ge&auml;ndert!</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet (wenn nicht <a href='../creat_auction.php'>hier</a> klicken)</font>");

					echo("<meta http-equiv='refresh' content='3;URL=../index.php'>");
				} else {
					echo("<font face='Arial'><h3>Fehler beim &auml;ndern aufgetreten.</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet (wenn nicht <a href='../creat_auction.php'>hier</a> klicken)</font>");

					echo("<meta http-equiv='refresh' content='3;URL=../index.php'>");
				}
			} else {
				echo("<font face='Arial'><h3>Altes Passwort falsch!</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet (wenn nicht <a href='../creat_auction.php'>hier</a> klicken)</font>");

				echo("<meta http-equiv='refresh' content='3;URL=../index.php'>");
			}
		} else {
			echo("<font face='Arial'><h3>Das wiederholte Passwort und das Passwort m&uuml;ssen gleich sein!</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet (wenn nicht <a href='../creat_auction.php'>hier</a> klicken)</font>");

			echo("<meta http-equiv='refresh' content='3;URL=../index.php'>");
		}
	} else header("Location: ../index.php");
} else header("Location: ../view/user/auth_error.php");
