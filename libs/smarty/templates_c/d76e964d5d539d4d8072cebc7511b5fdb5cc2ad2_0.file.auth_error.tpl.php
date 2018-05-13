<?php
/* Smarty version 3.1.30, created on 2018-04-22 00:06:12
  from "/users/webeng/www/templates/auth_error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adbb5d4bd4592_80336109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76e964d5d539d4d8072cebc7511b5fdb5cc2ad2' => 
    array (
      0 => '/users/webeng/www/templates/auth_error.tpl',
      1 => 1524348240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5adbb5d4bd4592_80336109 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/xyz.css">
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">

    <h3>Du bist nicht authorisiert diese Seite zu betreten</h3>


</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
