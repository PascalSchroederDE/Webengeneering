<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:21:51
  from "/users/webeng/www/templates/article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af8904fc55947_06140471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9365070e3c8ea75da2f87abf8496314ecca751fa' => 
    array (
      0 => '/users/webeng/www/templates/article.tpl',
      1 => 1526239303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5af8904fc55947_06140471 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/users/webeng/www/libs/smarty/plugins/modifier.replace.php';
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/auction.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/switch.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/edit.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/regex_art_editation.js"><?php echo '</script'; ?>
>		  <meta name="viewport" content="width=device-width, initial-scale=1">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">

    <!-- Only seller or admin can delete article -->
    <?php if ($_smarty_tpl->tpl_vars['seller_is_user']->value || $_smarty_tpl->tpl_vars['user_is_admin']->value) {?>
        <form id="delete" name="delete" method="post" action="../../php/delete.php">
            <input name="artid" id="artid" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
/>

            <button id="subdel" name="subdel" type="submit">
                <img src="../../img/delete.png" class="edit" onmousedown="this.src='../../img/delete_active.png';"
                     onmouseup="this.src='../../img/delete.png';" onmouseover="this.src='../../img/delete_hover.png';"
                     onmouseleave="this.src='../../img/delete.png';"/>
            </button>

        </form>
    <?php }?>

    <!-- Only seller can edit article -->
    <?php if ($_smarty_tpl->tpl_vars['seller_is_user']->value) {?>
        <img src="../../img/edit.png" class="edit" onmousedown="this.src='../../img/edit_active.png';"
             onmouseup="this.src='../../img/edit.png';" onmouseover="this.src='../../img/edit_hover.png';"
             onmouseleave="this.src='../../img/edit.png';" onclick="edit();"/>
    <?php }?>

    <div id="show_main">
        <h3>
            <a id="title_id"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
        </h3>

        <table>
            <tr>
                <td class="pic">															<div id="myCarousel" class="carousel slide" data-ride="carousel">					  <!-- Indicators -->					  <ol class="carousel-indicators">					  <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['img_amount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['img_amount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 0, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>						<li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['n']->value == 0) {?>class="active"<?php }?>></li>					  <?php }
}
?>
					  </ol>					  <!-- Wrapper for slides -->					  <div class="carousel-inner">					  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['img_amount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['img_amount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>						<div class="item<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?> active<?php }?>">						  <img src='../main/img.php?artid=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id="big">						</div>					  <?php }
}
?>
					  <!-- Left and right controls -->					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">						<span class="glyphicon glyphicon-chevron-left"></span>						<span class="sr-only">Previous</span>					  </a>					  <a class="right carousel-control" href="#myCarousel" data-slide="next">						<span class="glyphicon glyphicon-chevron-right"></span>						<span class="sr-only">Next</span>					  </a>					</div>
                </td>
                <td class="text">
                    <h2>
                        <a id="model_id"><?php echo $_smarty_tpl->tpl_vars['producer']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</a>
                    </h2>

                    <p class="condition">
                        Artikelzustand: <a id="condition_id"><b><?php echo $_smarty_tpl->tpl_vars['condition']->value;?>
</b></a>
                    </p>
                    <p class="price">
                        Preis: <a id="price_id"><b><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</b></a>
                    </p>
                    <p class="seller">Verkäufer: <?php echo $_smarty_tpl->tpl_vars['seller']->value;?>
</p>
                    <p class="cre_date">Erstellt: <b><?php echo $_smarty_tpl->tpl_vars['cre_date']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['cre_time']->value;?>
</b></p>
                    <p><form id="buy" name="buy" method="post" action="../../php/buy.php">
                        <input type="hidden" name="id_article" id="id_article" value=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
/>
                        <input type="submit" id="buy" name="buy" value="Kaufen"></input>
                    </form></p>

                    <p class="delivery" id="costs">
                        Versandkosten: <a id="del_price_id"><b><?php echo $_smarty_tpl->tpl_vars['delprice']->value;?>
</b></a>
                    </p>

                    <p class="delivery" id="time">
                        Versanddauer: <a id="del_time_id"><b><?php echo $_smarty_tpl->tpl_vars['deltime']->value;?>
</b></a>
                    </p>
                </td>
            </tr>
        </table>



        <input type="submit" id="information" value="Informationen" class="switch" onclick="switchdi('des', 'inf', 'information', 'description')"></input>
        <input type="submit" id="description" value="Beschreibung" class="switch" onclick="switchid('inf', 'des', 'description', 'information')"></input>
        <div id="inf">
            <table>
                <tr>
                    <td>
                        <p><b>Titel:</b> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
                        <p><b>Produktart:</b> <?php echo $_smarty_tpl->tpl_vars['producttype']->value;?>
</p>
                        <p><b>Hersteller:</b> <?php echo $_smarty_tpl->tpl_vars['producer']->value;?>
</p>
                    </td>
                    <td>
                        <p><b>Kategorie:</b> <?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</p>
                        <p><b>Artikelzustand:</b> <?php echo $_smarty_tpl->tpl_vars['condition']->value;?>
</p>
                        <p><b>Modell:</b> <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</p>
                    </td>
                </tr>
            </table>
        </div>

        <div id="des">
            <table><tr><td><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</td></tr></table>
        </div>

    </div>

    <!-- Edit form; only for seller; default hided; can be activated with javascript through pressing belonging button  -->
    <?php if ($_smarty_tpl->tpl_vars['seller_is_user']->value) {?>
    <div id="edit_main">
        <form method="post" id="edit_auction" name="edit_auction" action="../../php/edit.php" onsubmit="return control()">
            <input type="hidden" id="artid" name="artid" value=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
/>

            <h3>
                <input type="text" name="title" id="title" value=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
/>
            </h3>
            <table>
                <tr>
                    <td class="pic">
                       <div id="myCarousel" class="carousel slide" data-ride="carousel">					  <!-- Indicators -->					  <ol class="carousel-indicators">					  <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['img_amount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['img_amount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 0, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>						<li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['n']->value == 0) {?>class="active"<?php }?>></li>					  <?php }
}
?>
					  </ol>					  <!-- Wrapper for slides -->					  <div class="carousel-inner">					  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['img_amount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['img_amount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>						<div class="item<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?> active<?php }?>">						  <img src='../main/img.php?artid=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id="big">						</div>					  <?php }
}
?>
					  <!-- Left and right controls -->					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">						<span class="glyphicon glyphicon-chevron-left"></span>						<span class="sr-only">Previous</span>					  </a>					  <a class="right carousel-control" href="#myCarousel" data-slide="next">						<span class="glyphicon glyphicon-chevron-right"></span>						<span class="sr-only">Next</span>					  </a>					</div>
                    </td>
                    <div class="pre">
                    </div>
                    </td>
                    <td class="text">

                        <h2>
                            <input type="text" name="producer" id="producer" value="<?php echo $_smarty_tpl->tpl_vars['producer']->value;?>
"/>
                            <input type="text" name="model" id="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
"/>
                        </h2>

                        <p class="price">
                            Preis: <input type="number" step="0.01" name="price" id="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"/>
                        </p>


                        <p class="seller">Verkäufer: <?php echo $_smarty_tpl->tpl_vars['seller']->value;?>
</p>


                        <p class="cre_date">Erstellt: <b><?php echo $_smarty_tpl->tpl_vars['cre_date']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['cre_time']->value;?>
</b></p>


                        <p class="delivery" id="costs">
                            Versandkosten: <input type="number" step="0.01" name="delivery_costs" id="delivery_costs" value="<?php echo $_smarty_tpl->tpl_vars['delprice']->value;?>
">
                        </p>

                        <p class="delivery" id="time">
                            Versanddauer: <input type="text" name="delivery_time" id="delivery_time" value="<?php echo $_smarty_tpl->tpl_vars['deltime']->value;?>
"/>
                        </p>
                    </td>
                </tr>
            </table>

            <div id="des_edit">
                <h2>Beschreibung</h2>
                <textarea name="description_e" id="description_e" class="description" rows="20"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['description']->value,'<br />','');?>
</textarea>
            </div>


            <input type="submit" id="change" name="change" value="Änderung speichern"/>

        </form>
    </div>
    <?php }?>

    <object height="0px"></object>

</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
