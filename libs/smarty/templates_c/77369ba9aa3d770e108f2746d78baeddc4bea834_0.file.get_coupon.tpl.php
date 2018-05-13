<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:50:49
  from "/users/webeng/www/templates/get_coupon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af89719a3caf2_18442074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77369ba9aa3d770e108f2746d78baeddc4bea834' => 
    array (
      0 => '/users/webeng/www/templates/get_coupon.tpl',
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
function content_5af89719a3caf2_18442074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/support.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/regex_credit.js"><?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">
    <h3>Gutscheincode erwerben</h3>

    <form method="post" id="get_coupon" name="get_coupon" action="../../php/get_coupon_mail.php" onsubmit="return control()">
        <p>
            <a>Betrag: </a>
            <select name="amount" id="amount">
                <option value="10">10€</option>
                <option value="50">50€</option>
                <option value="100">100€</option>
            </select>
        </p>


        <p>
            <a>Gewünschte Zahlungsmethode: </a>
            <input type="text" name="payment_method" id="payment_method" placeholder="Zahlungsmethode"/>
        </p>

        <p class="additional_coupon">
            <a>Anmerkung:</a>
        </p>
        <p>
            <textarea name="annotation" id="annotation" class="annotation" placeholder="Zusätzliche Anmerkung" rows="20"></textarea>
        </p>

        <input type="submit" name="get_coupon" id="get_coupon" value="Absenden"/>
    </form>

    <p class="foot">Alles weitere wird per Mail geklärt</p>
</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
