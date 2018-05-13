<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:01:26
  from "/users/webeng/www/templates/support.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af88b86232c85_60160039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd530ac28ce72507f81ad46c8dbb285f16c862c1b' => 
    array (
      0 => '/users/webeng/www/templates/support.tpl',
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
function content_5af88b86232c85_60160039 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/support.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/regex_support.js"><?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">
    <h3>Support anschreiben (Fragen etc.)</h3>

    <form method="post" name="support" id="support" action="../../php/support.php" onsubmit="return control()">
        <p>
            <a>Betreff: </a>
            <input type="text" name="subject" id="subject" style="margin-left:80px" placeholder="Betreff"/>
        </p>

        <p class="additional_coupon">
            <a>Anliegen:</a>
        </p>
        <p>
            <textarea name="matter" id="matter" placeholder="Geben Sie ihr Anliegen ein" rows="20"></textarea>
        </p>

        <input type="submit" name="get_coupon" id="get_coupon" value="Absenden"/>
    </form>

    <p class="foot">Der Administrator meldet sich per Mail bei Ihnen</p>
</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
