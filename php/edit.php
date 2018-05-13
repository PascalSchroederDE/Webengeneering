<?php
session_start();
if ($_SESSION['login'] == true) {
	require_once("connect.php");
	$con = connect();

	$userid = $_SESSION['userid'];

	$artid = $_POST['artid'];
	$query_s = mysqli_query($con, "SELECT * FROM article WHERE articleid='$artid'");
	$row_s = mysqli_fetch_assoc($query_s);
	$sellerid = $row_s['userid'];

	$title = $_POST['title'];
	$producer = $_POST['producer'];
	$model = $_POST['model'];
	$price = $_POST['price'];
	$del_price = $_POST['delivery_costs'];
	$del_time = $_POST['delivery_time'];
	$description = nl2br($_POST['description_e']);
	$change = $_POST['change'];

	$title_rex = '/[a-z0-9?&=_.!äöüß-]$/i';
	$price_rex = '/[0-9.,-]$/i';
	$del_price_rex = '/[0-9.,-]$/i';
	$del_time_rex = '/[0-9-]$/i';
	$prod_type_rex = '/[a-z_.äöüß-]$/i';
	$producer_rex = '/[a-z&_.äöüß-]$/i';
	$model_rex = '/[a-z&_.äöüß-]$/i';
	$description_rex = '/[a-z0-9?&=_,.!äöüß-]$/i';

	$nCONDITION = $_POST['cat_edit'];
	switch ($nCONDITION) {
		case "Neu":
			$condition = "Neu";
			break;
		case "Fastwieneu":
			$condition = "Fast wie neu";
			break;
		case "Gebrauchtguterzustand":
			$condition = "Gebraucht (guter Zustand)";
			break;
		case "Gebraucht":
			$condition = "Gebraucht";
			break;
		case "Generalüberholt":
			$condition = "Generalüberholt";
			break;
		default:
			$condition = "";
	}

	if ($change) {
		if ($userid == $sellerid) {
			if ($title AND $price AND $del_price AND $del_time AND $model AND $producer AND $description AND preg_match($title_rex, $title) AND preg_match($del_time_rex, $del_time) AND preg_match($del_price_rex, $del_price) AND preg_match($price_rex, $price) AND preg_match($producer_rex, $producer) AND preg_match($model_rex, $model) AND preg_match($description_rex, $description)) {


				$query = mysqli_query($con, "UPDATE article SET title='$title', price='$price', deliveryprice='$del_price', deliverytime='$del_time', producer='$producer', model='$model', artcondition='$condition', description='$description' WHERE articleid='$artid'") or die ("Update query failed: " . mysqli_error($con));
				if ($query == true) {
					header("Location: ../view/main/auction.php?artid=$artid");
				} else
					echo("<font face='Arial'><h3>Angebot konnte nicht ge&auml;ndert werden.<br>Ein Fehler ist aufgetreten. Proieren sie es erneut</h3> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../view/main/index.php'>hier</a> klicken)</font>");
				echo("<meta http-equiv='refresh' content='3;URL=../auction.php?artid=$artid'>");
			} else {
				echo("<font face='Arial'><h3>Angebot konnte nicht ge&auml;ndert werden.<br>Nicht alle Felder ausgef&uuml;llt</h3> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../view/main/index.php'>hier</a> klicken)</font>");
				echo("<meta http-equiv='refresh' content='3;URL=../auction.php?artid=$artid'>");
			}
		} else {
			echo("<font face='Arial'><h3>Angebot konnte nicht ge&auml;ndert werden.<br>Das Angebot geh&ouml;rt Ihnen nicht.</h3> Automatische Weiterleitung in 3 Sekunden (wenn nicht <a href='../view/main/index.php'>hier</a> klicken)</font>");
			echo("<meta http-equiv='refresh' content='3;URL=../new_article.php'>");
		}
	} else
		header("Location: ../view/category/new_article.php");
} else header("Location: ../view/user/auth_error.php");
?>