<?php
session_start();

require_once("../../php/connect.php");
$con = connect();

include('../../php/userdata_request.php');
$user_data = get_user_data();

$artid = $_GET['artid'];
if ($artid==0) {
  header("Location: new_article.php");
}
	
$article_query = mysqli_query($con,"SELECT * FROM article WHERE articleid=$artid");
$article_num = mysqli_num_rows($article_query);

$image_query= mysqli_query($con,"SELECT * FROM image WHERE articleid=$artid");
$image_num=mysqli_num_rows($image_query);

if ($article_num!=0) {
	//getting all article information
    WHILE ($row = mysqli_fetch_assoc($article_query)) {
        $article_data = array(
            'article_id'=>$artid,
            'title'=>stripslashes($row['title']),
            'category'=>stripslashes($row['category']),
            'price'=>stripslashes($row['price']),
            'delprice'=>stripslashes($row['deliveryprice']),
            'deltime'=>stripslashes($row['deliverytime']),
            'producttype'=>stripslashes($row['producttype']),
            'condition'=>stripslashes($row['artcondition']),
            'producer'=>stripslashes($row['producer']),
            'model'=>stripslashes($row['model']),
            'description'=>stripslashes($row['description']),
            'cre_date'=>stripslashes($row['dateofcre']),
            'cre_time'=>stripslashes($row['timeofcre']),
            'sellerid'=>stripslashes($row['userid']),
	        'seller_is_user'=>stripslashes($row['userid']==$user_data['userid']),
			'img_amount'=>$image_num
        );
    }
} else {
    header("Location: ../category/new_article.php");
}

$sellerid=$article_data['sellerid'];
$seller_query = mysqli_query($con,"SELECT * FROM user WHERE id=$sellerid");
$seller_num = mysqli_num_rows($seller_query);
if ($seller_num!=0) {
    While ($row = mysqli_fetch_assoc($seller_query)) {
        $article_data['seller']=$row['username'];
    }
} else {
    die(mysqli_error($con));
}

$data = array_merge($user_data, $article_data);

require_once('../../libs/smtemplate.php');
$tpl = new SMTemplate();
$tpl->render('article', $data);
?>