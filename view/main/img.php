<?php

include("../../php/connect.php");

/*This function is used to pack the relevant data from one database entry into an array*/
function extractImageDetailFromRow ($row){
	return array(
		id  => $row['imgid'],
		type => $row['imgtype'],
	);
}

/*This function retrieves name and type of the images related to the article with artid*/
function getImagesDetailsFromDB ($artid){
	$con = connect();
	$query= mysqli_query($con,"SELECT * FROM image WHERE articleid=$artid");
	$num=mysqli_num_rows($query);

	$images = array();
	while ($row = mysqli_fetch_assoc($query)) {
		array_push($images, extractImageDetailFromRow($row));
	}
	
	return $images;
}

/*This function tries to read a file of type image/jpeg or image/png from the img/auction path and returns either the image itself or a placeholder with an error message*/
function LoadImage($imageDetail){
	$imgname = $imageDetail['id'];
	$imagetype = $imageDetail['type'];
	$auction_img_path= "../../img/auctions";
	$imgpath = "$auction_img_path/$imgname";
	if ($imagetype == "image/jpeg"){
		$im = @imagecreatefromjpeg($imgpath);
	}
	if ($imagetype == "image/png"){
		$im  = @imagecreatefrompng($imgpath);
	}
	
	/* Prüfe, ob das fehlschlug */
	if(!$im){
		/* Erzeuge ein schwarzes Bild */
		$im  = imagecreatetruecolor(150, 30);
		$bgc = imagecolorallocate($im, 255, 255, 255);
		$tc  = imagecolorallocate($im, 0, 0, 0);

		imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

		/* Gib eine Fehlermeldung aus */
		imagestring($im, 1, 5, 5, 'Fehler beim Laden von ' . $imgname, $tc);
	}

	return array(
		image  => $imgpath,
		type => $imagetype,
	);
}

function displayImage ($res){
	$image = str_replace("jpg","jpeg",$res['image']);
	$type = $res['type'];
	header('Content-Type:'.$type);
	readfile($image);
} 

displayImage(LoadImage(getImagesDetailsFromDB($_GET['artid'])[$_GET['id']]));

?>