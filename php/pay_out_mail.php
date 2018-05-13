<?php
//sending email for paying out credits
session_start();
if ($_SESSION['login'] == true) {

	require_once("connect.php");
	$con = connect();

	$amount_tmp = $_POST['amount_pay_out'];
	$amount = "$amount_tmp €";
	$payment_method = $_POST['payment_method'];
	$annotation_user = nl2br($_POST['annotation']);
	$annotation = "<b>Zahlungsmethode: </b>$payment_method<br><b>Betrag: </b>$amount<br><br>$annotation_user";

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
	$subject = "Auszahlungs-Anfrage ($amount) von $sender_username";
	$from = "From: $sender_prename $sender_name <server.auktionshaus@gmail.net>\n";
	$from .= "Reply-To: $sender_mail\n";
	$from .= "Content-Type: text/html\n";
	$text = "$annotation";

	mail($receiver, $subject, $text, $from);

	echo("<font face='Arial'><h3>Danke f&uuml;r Ihre Nachricht!<br>Sie wird in K&uuml;rze verarbeitet...</h3> Automatische Weiterleitung in 5 Sekunden (wenn nicht <a href='../view/main/index.php'>hier</a> klicken)</font>");


	echo("<meta http-equiv='refresh' content='5;URL=/'../index.php/''>");
} else header("Location: ../view/user/auth_error.php");
?>