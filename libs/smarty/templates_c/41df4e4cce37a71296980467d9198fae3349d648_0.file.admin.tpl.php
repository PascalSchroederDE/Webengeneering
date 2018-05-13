<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:43:24
  from "/users/webeng/www/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af8955c2a5795_48097590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df4e4cce37a71296980467d9198fae3349d648' => 
    array (
      0 => '/users/webeng/www/templates/admin.tpl',
      1 => 1526240603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5af8955c2a5795_48097590 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3>Admin-Interface</h3>

    <div id="preview" onclick="location.href='../admin/user_list.php'">
        <img src="../../img/human.png" width="500px">
        <p>
        <h2>Benutzerliste</h2></p>
        <p class="condition">Alle Benutzer und dazugehörige Daten</p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>

    <div id="preview" onclick="location.href='../admin/buy_list.php'">
        <img src="../../img/euro.png" width="500px">
        <p>
        <h2>Kaufliste</h2></p>
        <p class="condition">Alle Käufe von neu bis alt</p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>

    <div id="preview" onclick="location.href='../admin/coupon_code_list.php'">
        <img src="../../img/coupon.png" width="500px">
        <p>
        <h2>Gutscheincodes</h2></p>
        <p class="condition">Alle Gutscheincodes zum kopieren und aktivieren</p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
