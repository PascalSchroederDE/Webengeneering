<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:24:37
  from "/users/webeng/www/templates/category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af890f5d145b5_35755587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea87700e394e3f6bdec0fdedb06f6fada72cc95a' => 
    array (
      0 => '/users/webeng/www/templates/category.tpl',
      1 => 1526207048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5af890f5d145b5_35755587 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/preview.css">
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">
    <h3>Kategorien</h3>

    <div id="preview" onclick="location.href='electronic.php'">
        <div id="img">
            <img src="../../img/computer.png">
        </div>
        <div class="cattext">
            <p><h2>Elektronik</h2></p>
            <p class="condition">Handys, Laptops, PCs & Ähnliches </p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='home.php'">
        <div id="img">
            <img src="../../img/house.png">
        </div>
        <div class="cattext">
            <p><h2>Haushalt</h2></p>
            <p class="condition">Waschmaschinen, Küchen, Tische & Ähnliches</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='clothes.php'">
        <div id="img">
            <img src="../../img/tshirt.png">
        </div>
        <div class="cattext">
            <p><h2>Kleidung</h2></p>
            <p class="condition">Oberteile, Hosen, Schuhe etc.</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='freetime.php'">
        <div id="img">
            <img src="../../img/ball.png">
        </div>
        <div class="cattext">
            <p><h2>Sport & Freizeit</h2></p>
            <p class="condition">Bälle, Tennisschläger, Gesellschaftsspiele etc.</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='other.php'">
        <div id="img">
            <img src="../../img/point.png">
        </div>
        <div class="cattext">
            <p><h2>Sonstiges</h2></p>
            <p class="condition">Andere Gegenstände</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
