<?php
session_start();
if ($_SESSION['login']==true) {
$title=array();
$price=array();
$delprice=array();
$deltime=array();
$condition=array();

include("php/connect.php");

$userid=$_SESSION['userid'];

$userarts = mysql_query("SELECT * FROM article WHERE userid=$userid");
$num = mysql_num_rows($userarts);

if ($num!=0)
{
	$n=1;
	WHILE ($row = mysql_fetch_assoc($userarts))
	{
			$id[$n]=$row['articleid'];
			$title[$n]=$row['title'];
			$price[$n]=$row['price'];
			$delprice[$n]=$row['deliveryprice'];
			$deltime[$n]=$row['deliverytime'];
			$condition[$n]=$row['artcondition'];
			$img[$n]="img.php?artid=$id[$n]&id=1";
			$id[$n]=$row['articleid'];
			$n++;
	}
}
?>
<html>

  <head>
	<?php include("head.php");?>
  
	<link rel="stylesheet" type="text/css" href="css/preview.css">
  </head>
  
	<?php include("header.php");?>
	  
	  <div id="main">
	  <h3>Meine Angebote</h3>
		<?php for($n=1;$n<=$num;$n++) {?>
		
		<form name="load_article" action="auction.php" method="get">
	    <div id="preview" onClick="location.href='auction.php?artid=<?php echo $id[$n]?>';">
		  <img src="<?php echo $img[$n]; ?>">
	      <p><h2><?php echo $title[$n]?></h2></p>
		  <p class="condition"><?php echo $condition[$n]?></p>
		  <p><h1><?php echo $price[$n]?> €</h1></p>
		  <p class="subtext"><b>+ <?php echo $delprice[$n]?> € Versand</b></p>
		  <p class="subtext"><?php echo $deltime[$n]?> Werktage</p>
		</div>
		</form>
		
		<?php }?>
	  </div>
	  
	  <div id="footer">

	  </div>
	  
	</div>
  </body>
 </html>
 <?php
 ;} else { header("Location: index.php"); }
 ?>
