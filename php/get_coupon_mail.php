<?php
//php script for sending email for coupon-code-request
session_start();
if ($_SESSION['login'] == true) {

	require_once("connect.php");
	$con = connect();

	$amount_raw = $_POST['amount'];

	switch ($amount_raw) {
		case "10":
			$amount = "10 €";
			break;
		case "50":
			$amount = "50 €";
			break;
		case "100":
			$amount = "100 €";
			break;
		default:
			$amount = "0 €";
	}

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
	$subject = "Gutscheincode-Anfrage ($amount) von $sender_username";
	$from = "From: $sender_prename $sender_name <server.auktionshaus@gmail.net>\n";
	$from .= "Reply-To: $sender_mail\n";
	$from .= "Content-Type: text/html\n";
	$text = "$annotation";

	mail($receiver, $subject, $text, $from);

	echo("<font face='Arial'><h3>Danke f&uuml;r Ihre Nachricht!<br>Sie wird in K&uuml;rze verarbeitet...</h3> Automatische Weiterleitung in 5 Sekunden (wenn nicht <a href='../view/main/index.php'>hier</a> klicken)</font>");


	echo("<meta http-equiv='refresh' content='5;URL=/'../index.php/''>");
} else header("Location: ../view/user/auth_error.php");
?>