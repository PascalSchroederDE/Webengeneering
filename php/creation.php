<?php
session_start();

//check if user is actually loged in
if ($_SESSION['login'] == true) {
	
	//retrieve all data from the form 
	$userid = $_SESSION['userid'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	$del_price = $_POST['delivery_costs'];
	$del_time = $_POST['delivery_time'];
	$product = $_POST['product_type'];
	$producer = $_POST['producer'];
	$model = $_POST['model'];
	$description = nl2br($_POST['description']);
	$create = $_POST['create'];
	$auction_img_path= "../img/auctions";
	$timestamp = time();
	$date = date("Y-m-d", $timestamp);
	$time = date("H:i:s", $timestamp);

	//define regex to validate field inputs
	$title_rex = '/[a-z0-9?&=_.!äöüß-]$/i';
	$price_rex = '/[0-9.,-]$/i';
	$del_price_rex = '/[0-9.,-]$/i';
	$del_time_rex = '/[0-9-]$/i';
	$prod_type_rex = '/[a-z_.äöüß-]$/i';
	$producer_rex = '/[a-z&_.äöüß-]$/i';
	$model_rex = '/[a-z0-9?&=_.!äöüß-]$/i';
	$description_rex = '/[a-z0-9?&=_,.!äöüß-]$/i';

	
	//tranform category field to more userfriendly string	
	switch ($_POST['category']) {
		case "Elektronik":
			$category = "Elektronik";
			break;
		case "Haushalt":
			$category = "Haushalt";
			break;
		case "Kleidung":
			$category = "Kleidung";
			break;
		case "Sportfreizeit":
			$category = "Sport & Freizeit";
			break;
		case "Sonstiges":
			$category = "Sonstiges";
			break;
		default:
			$category = "";
	}

	//tranform condition field to more userfriendly string
	switch ($_POST['condition']) {
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

	
	
	/*function to rearanges $_FILES to an array so an upload of multiple files can be more easily handled*/
	function reArrayFiles(&$file_post) {
		$file_ary = array();
		$file_count = count($file_post['name']);
		$file_keys = array_keys($file_post);
		for ($i=0; $i<$file_count; $i++) {
			foreach ($file_keys as $key) {
				$file_ary[$i][$key] = $file_post[$key][$i];
			}
		}
		return $file_ary;
	}		
	
	/*Check for uploaded files and save them for later use*/
	
	// producer and model are optional, therefore they either have to conform their regex or be empty
	if ($producer) {
		if (preg_match($producer_rex, $producer)) {
			$producer_stat = true;
		} else $producer_stat = false;
	} else $producer_stat = true;
	
	if ($model) {
		if (preg_match($model_rex, $model)) {
			$model_stat = true;
		} else $model_stat = false;
	} else $model_stat = true;
	
	if ($create) {
		//check if every non optional field is valid (not empty and conform to regex)
		//check if optionals fields have been validated
		if ($title AND $price AND $del_time AND $product AND $description AND preg_match($title_rex, $title) AND preg_match($del_time_rex, $del_time) AND preg_match($del_price_rex, $del_price) AND preg_match($price_rex, $price) AND preg_match($prod_type_rex, $product) AND preg_match($description_rex, $description) AND $producer_stat == true AND $model_stat == true) {
			require_once("connect.php");
			$con = connect();
			
			//add articel to database
			$query_I = mysqli_query($con, "INSERT INTO article (userid,title,category,price,deliveryprice,deliverytime,producttype,artcondition,producer,model,description,dateofcre,timeofcre) VALUES ('$userid','$title','$category','$price','$del_price','$del_time','$product','$condition','$producer','$model','$description','$date','$time')") or die ("Update query failed: " . mysqli_error($con));
							
							
			//check if files have been added to the form
			if ($_FILES['img']) {
				$file_ary = reArrayFiles($_FILES['img']);
				
				//set this to false if one of the files could not be saved and referenced correctly
				$allFilesSavedSuccesfully = true;
				
				//$file_ary contains all the files that have been aded to the form
				foreach ($file_ary as $file) {
					//check if there has been any criticle error while uploading the file
					//no error (code 0) or no file uploaded (code 4)
					if ($file['error'] != 0 AND $file['error'] != 4) {
						echo("<font face='Arial'><h3>Fehler beim Hochladen.</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet(wenn nicht <a href='../create_auction.php'>hier</a> klicken)</font>");

						echo("<meta http-equiv='refresh' content='3;URL=../create_auction.php'>");

						die();
					}
	
					if ($file['error'] != 4) {
						if ($file['type'] != "image/jpg" && $file['type'] != "image/png" && $file['type'] != "image/jpeg" && $file['type'] != "image/gif") {

							echo("<font face='Arial'><h3>Dateityp nicht erlaubt!</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet (wenn nicht <a href='../create_auction.php'>hier</a> klicken)</font>");
							
							echo("<meta http-equiv='refresh' content='3;URL=../create_auction.php'>");

							die();

						} else { // there is a file that has been succesfully uploaded --> now save it 
							//check if the article has been succesfully saved to the db 
							if ($query_I == true) {
								//retrieve article id
								$artid_query = mysqli_query($con, "SELECT MAX(articleid) FROM article");
								$artid_query->data_seek(0);
								$artid = $artid_query->fetch_array()[0];
								
								//generate new file name
								$randnum = mt_rand(100000, 999999);
								$typeEnding = explode("/", $file['type'])[1];
								$img_name = "$artid-$randnum.$typeEnding";
								
								$originalPath = $file["tmp_name"];
								$newPath = "$auction_img_path/$img_name";
								copy ($originalPath, $newPath);
								
								//file has been saved --> add refernce to file to the article in the db
								$query = mysqli_query($con, "INSERT INTO image (articleid, imgid, imgtype) VALUES('$artid', '$img_name','$type')");
							} else {
								echo("<font face='Arial'><h3>Fehler beim Speichern.</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet(wenn nicht <a href='../create_auction.php'>hier</a> klicken)</font>");

								echo("<meta http-equiv='refresh' content='3;URL=../create_auction.php'>");

								die();
							}
						}
					}
					//check if reference to current image in db
					if ($query == false) {
						$allFilesSavedSuccesfully = false;
						echo("<font face='Arial'><h3>Fehler beim Speichern.</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet(wenn nicht <a href='../create_auction.php'>hier</a> klicken)</font>");

						echo("<meta http-equiv='refresh' content='3;URL=../create_auction.php'>");

						die();
					}
				}
				if ($allFilesSavedSuccesfully == true){
						header("Location: ../index.php");
				}
			}
		} else
			echo("<font face='Arial'><h3>Nicht alle Felder regul&auml;r ausgef&uuml;lt</h3> Sie werden in 3 Sekunden zur&uuml;ckgeleitet(wenn nicht <a href='../create_auction.php'>hier</a> klicken)</font>");

		echo("<meta http-equiv='refresh' content='3;URL=../create_auction.php'>");
	
	} else
		header("Location: ../create_auction.php");

} else header("Location: ../view/user/auth_error.php");
?>