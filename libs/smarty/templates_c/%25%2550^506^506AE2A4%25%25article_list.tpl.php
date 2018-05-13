<?php /* Smarty version 2.6.31, created on 2018-04-06 19:48:49
         compiled from article_list.tpl */ ?>
<html>

<head>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'head.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <link rel="stylesheet" type="text/css" href="css/preview.css">
</head>

<div id="main">
    <h3><?php echo $this->_tpl_vars['page_title']; ?>
</h3>

        <form name="load_article" class="preview" action="auction.php" method="get">
            <div id="preview" onClick="location.href='auction.php?artid=<?php echo $this->_tpl_vars['id'][1]; ?>
'">
                <img src="img.php?artid=<?php echo $this->_tpl_vars['id'][1]; ?>
&id=1">
                <p><h2><?php echo $this->_tpl_vars['title'][1]; ?>
</h2></p>
                <p class="condition"><?php echo $this->_tpl_vars['condition'][1]; ?>
&nbsp;</p>
                <p><h1><?php echo $this->_tpl_vars['price'][1]; ?>
 €</h1></p>
                <p class="subtext"><b>+ <?php echo $this->_tpl_vars['delprice'][1]; ?>
 € Versand</b></p>
                <p class="subtext"><?php echo $this->_tpl_vars['deltime'][1]; ?>
 Werktage</p>
            </div>
        </form>
</div>

<div id="footer">

</div>

</div>
</body>
</html>