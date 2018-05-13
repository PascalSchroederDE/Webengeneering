<?php /* Smarty version 2.6.31, created on 2018-04-06 00:51:16
         compiled from start.tpl */ ?>
<html>

  <head>
    <?php echo '<?php'; ?>
 include("head.php");<?php echo '?>'; ?>

	
	<link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
  
	<?php echo '<?php'; ?>
 include("header.php");<?php echo '?>'; ?>

	  
	  <div id="main">
	    <h3>Auktionshaus</h3>
			<a href="auction.php?artid=<?php echo '<?php'; ?>
 echo $l_id;<?php echo '?>'; ?>
"><img src="<?php echo '<?php'; ?>
 echo "img.php?artid=$l_id&id=1"; <?php echo '?>'; ?>
">
			<p><h2><?php echo '<?php'; ?>
 echo $title[$l_id];<?php echo '?>'; ?>
</h2></p></a>
			
			<a> Siehe diese und weitere Angebote auf dieser Website!</a><br>
			<a> Melde dich jetzt an, um Angebote zu erstellen und zu kaufen!</a>
	  </div>
	  
	  <div id="footer">

	  </div>
	  
	</div>
  </body>
</html>