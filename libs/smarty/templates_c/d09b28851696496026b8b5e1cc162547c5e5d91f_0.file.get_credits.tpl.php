<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:30:32
  from "/users/webeng/www/templates/get_credits.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af892585d9969_73454233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd09b28851696496026b8b5e1cc162547c5e5d91f' => 
    array (
      0 => '/users/webeng/www/templates/get_credits.tpl',
      1 => 1526203754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5af892585d9969_73454233 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/payment.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/jump.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/pasteEvent.js"><?php echo '</script'; ?>
>

</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">
    <h3>Geben Sie hier ihren Gutscheincode ein</h3>

    <form id="getcred" name="getcred" method="post" action="../../php/get_credits.php">
        <p class="get_credits">
            <input type="text" class="coupon" id="coupon1" onkeyup="jump(this, 'coupon2')" onpaste="pasteEvent(this)" name="coupon1" placeholder="****"><a>-</a>
            <input type="text" class="coupon" maxlength="4" id="coupon2" onkeyup="jump(this, 'coupon3')" name="coupon2" placeholder="****"><a>-</a>
            <input type="text" class="coupon" maxlength="4" id="coupon3" onkeyup="jump(this, 'coupon4')" name ="coupon3" placeholder="****"><a>-</a>
            <input type="text" class="coupon" maxlength="4" id="coupon4" name="coupon4" placeholder="****">
        </p>

        <p class="credits_amount">
            <a>Betrag*: </a>
            <select name="amount" id="amount">
                <option value="10">10€</option>
                <option value="50">50€</option>
                <option value="100">100€</option>
            </select>
        </p>

        <p class="credits_submit" align="center">
            <input type="submit" value="Absenden">
        </p>
    </form>

    <p class="foot">
        <a>Noch kein Gutscheincode?</a> <a href="../user/get_coupon.php">Hier bestellen!</a>
    </p>

</div>

<div id="footer">
    * Angabe wird als zusätzliche Sicherheitsmaßnahme benötigt
</div>

</div>
</body>
</html><?php }
}
