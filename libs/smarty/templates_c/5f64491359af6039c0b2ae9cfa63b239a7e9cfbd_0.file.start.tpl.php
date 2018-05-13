<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:11:56
  from "/users/webeng/www/templates/start.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af88dfc5c2d82_85678434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f64491359af6039c0b2ae9cfa63b239a7e9cfbd' => 
    array (
      0 => '/users/webeng/www/templates/start.tpl',
      1 => 1526238714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5af88dfc5c2d82_85678434 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

  <head>
	  <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	  <link rel="stylesheet" type="text/css" href="../../css/index.css">
  </head>

  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


  <div id="page">
      <p id="line" class="bot">
          <div id="main">
                <h3>Auktionshaus</h3>
                    <a href="../../view/main/auction.php?artid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><img src="img.php?artid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&id=0">
                    <p><h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2></p></a>

                    <a> Siehe diese und weitere Angebote auf dieser Website!</a><br>
                    <a> Melde dich jetzt an, um Angebote zu erstellen und zu kaufen!</a>
              </div>

              <div id="footer">

              </div>

            </div>

</html><?php }
}
