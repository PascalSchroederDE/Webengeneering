<?php
/* Smarty version 3.1.30, created on 2018-05-13 20:56:24
  from "/users/webeng/www/templates/article_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af88a58449f87_59356736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90bc7823e64a9b0e52f1af8f30e3c2f8072ded79' => 
    array (
      0 => '/users/webeng/www/templates/article_list.tpl',
      1 => 1526237780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5af88a58449f87_59356736 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/preview.css">
    <link rel="stylesheet" type="text/css" href="../../css/sort.css">
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">
    <?php if ($_smarty_tpl->tpl_vars['link_to_sort']->value != null) {?>
        <ul>
            <li><a>Sortieren nach</a>
                <ul id="sort">
                    <li id="a_u">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_sort']->value;?>
sort=articleid&order=ASC">
                            Datum <img src="../../img/up.png">
                        </a></li>
                    <li id="a_d">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_sort']->value;?>
sort=articleid&order=DESC">
                            Datum <img src="../../img/down.png">
                        </a></li>
                    <li id="b_u">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_sort']->value;?>
sort=price&order=ASC">
                            Preis <img src="../../img/up.png">
                        </a></li>
                    <li id="b_d">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_sort']->value;?>
sort=price&order=DESC">
                            Preis <img src="../../img/down.png">
                        </a></li>
                    <li id="c_u">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_sort']->value;?>
sort=title&order=ASC">
                            Titel <img src="../../img/up.png">
                        </a></li>
                    <li id="c_d">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_sort']->value;?>
sort=title&order=DESC">
                            Titel <img src="../../img/down.png">
                        </a></li>
                </ul></li>
        </ul>
    <?php }?>

    <h3><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h3>
        <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['amount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['amount']->value)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 1, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
            <form name="load_article" class="preview" action="../view/main/auction.php" method="get">
                <div id="preview" onClick="location.href='../main/auction.php?artid=<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['n']->value];?>
'">
                    <div id="img">
                        <img src="../main/img.php?artid=<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['n']->value];?>
&id=0">
                    </div>
                    <p><h2><?php echo $_smarty_tpl->tpl_vars['title']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</h2></p>
                    <p class="condition"><?php echo $_smarty_tpl->tpl_vars['condition']->value[$_smarty_tpl->tpl_vars['n']->value];?>
&nbsp;</p>
                    <p><h1><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->tpl_vars['n']->value];?>
 €</h1></p>
                    <p class="subtext"><b>+ <?php echo $_smarty_tpl->tpl_vars['delprice']->value[$_smarty_tpl->tpl_vars['n']->value];?>
 € Versand</b></p>
                    <p class="subtext"><?php echo $_smarty_tpl->tpl_vars['deltime']->value[$_smarty_tpl->tpl_vars['n']->value];?>
 Werktage</p>
                </div>
            </form>
        <?php }
}
?>

</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
