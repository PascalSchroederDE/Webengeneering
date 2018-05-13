<?php
/* Smarty version 3.1.30, created on 2018-04-07 16:52:51
  from "/users/webeng/www/templates/purchases_log.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac8db4336bb81_20863739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7c56ebb68d9f43f99a549b97d2f1c1e8975f93a' => 
    array (
      0 => '/users/webeng/www/templates/purchases_log.tpl',
      1 => 1523111911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ac8db4336bb81_20863739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/log.css">
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">
    <div id="purchases">
        <h3>Käufe</h3>

        <table>
            <tr>
                <th>Artikel</th>
                <th>Preis</th>
                <th>Versandkosten</th>
                <th>Verkäufer</th>
                <th>Gekauft am</th>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = -1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['invalid_purchases']->value+1+1 - ($_smarty_tpl->tpl_vars['last_id']->value) : $_smarty_tpl->tpl_vars['last_id']->value-($_smarty_tpl->tpl_vars['invalid_purchases']->value+1)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['last_id']->value, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['art_title_buy']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['art_price_buy']->value[$_smarty_tpl->tpl_vars['n']->value];?>
 €</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['del_price_buy']->value[$_smarty_tpl->tpl_vars['n']->value];?>
 €</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['seller']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['date_buy']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                </tr>
            <?php }
}
?>

        </table>
    </div>
    <div id="sales">
        <h3>Verkäufe</h3>
        <table>
            <tr>
                <th>Artikel</th>
                <th>Preis</th>
                <th>Versandkosten</th>
                <th>Käufer</th>
                <th>Verkauft am</th>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = -1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['invalid_sales']->value+1+1 - ($_smarty_tpl->tpl_vars['last_id']->value) : $_smarty_tpl->tpl_vars['last_id']->value-($_smarty_tpl->tpl_vars['invalid_sales']->value+1)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['last_id']->value, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['art_title_sale']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['art_price_sale']->value[$_smarty_tpl->tpl_vars['n']->value];?>
 €</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['del_price_sale']->value[$_smarty_tpl->tpl_vars['n']->value];?>
 €</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['date_sale']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                </tr>
            <?php }
}
?>

        </table>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
