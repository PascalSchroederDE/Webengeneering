<?php
/* Smarty version 3.1.30, created on 2018-04-29 10:11:29
  from "/users/webeng/www/templates/login_error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae57e310bf986_74896508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dae6c5d6eee6de9c64a3de38067e90ca19ae7e2' => 
    array (
      0 => '/users/webeng/www/templates/login_error.tpl',
      1 => 1524989447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ae57e310bf986_74896508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/login_error.css">
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">

    <h3>Da ist wohl etwas schiefgelaufen!</h3>

    <div class="login-error">
            <form action="../../php/login.php" method="post" onsubmit="return controllogin()">
                    <input type="text" name="user" id="login_user" placeholder="Benutzername" required="required">
                    <input type="password" name="pass" id="pass_user" placeholder="Passwort" required="required">
                <input type="submit" name="login" value="Anmelden" id="login">
            </form>
            <form action="../user/register.php" method="post">
                <input type="submit" name="reg" value="Registrieren" id="register">
            </form>
    </div>


</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
