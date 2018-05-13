<?php
//sending support email
session_start();
if ($_SESSION['login'] == true) {

	require_once("connect.php");
	$con = connect();

	$subject_user = $_POST['subject'];
	$matter = nl2br($_POST['matter']);

	$sender_username = $_SESSION['login'];
	$sender_prename = $_SESSION['prename'];
	$sender_id = $_SESSION['userid'];

	$query = mysqli_query($con, "SELECT * FROM user WHERE id='$sender_id'");
	$num = mysqli_num_rows($query);

	if ($num != 0) {
		WHILE ($row = mysqli_fetch_assoc($query)) {
			$sender_mail = $row['email'];
			$sender_name = $row['name'];
		}
	} else {
		header("Location: ../view/main/support.php");
		return;
	}

	$receiver = "adm.auktionshaus@gmail.com";
	$subject = "Support-Anfrage von $sender_username - $subject_user";
	$from = "From: $sender_prename $sender_name <server.auktionshaus@gmail.net>\n";
	$from .= "Reply-To: $sender_mail\n";
	$from .= "Content-Type: text/html\n";
	$text = "$matter";

	mail($receiver, $subject, $text, $from);

	echo("<font face='Arial'><h3>Danke f&uuml;r Ihre Nachricht!<br>Sie wird in K&uuml;rze verarbeitet...</h3> Automatische Weiterleitung in 5 Sekunden (wenn nicht <a href='../view/main/index.php'>hier</a> klicken)</font>");


	echo("<meta http-equiv='refresh' content='5;URL=../index.php'>");
} else header("Location: ../view/user/auth_error.php");
?>