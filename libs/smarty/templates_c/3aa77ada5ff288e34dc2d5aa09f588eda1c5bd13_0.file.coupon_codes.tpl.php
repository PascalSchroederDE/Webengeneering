<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:44:09
  from "/users/webeng/www/templates/coupon_codes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af89589ba8472_78499887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa77ada5ff288e34dc2d5aa09f588eda1c5bd13' => 
    array (
      0 => '/users/webeng/www/templates/coupon_codes.tpl',
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
function content_5af89589ba8472_78499887 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3>Gutschein-Codes</h3>

    <form id="cod_gen" name="cod_gen" method="post" action="../../php/code_gen.php">
        <a>Betrag: </a>
        <select name="amount" id="amount">
            <option value="10">10€</option>
            <option value="50">50€</option>
            <option value="100">100€</option>
        </select>
        <a>Anzahl: </a>
        <input type="number" step="1" value="1" min="0" max="100" name="repeat" id="repeat">
        <input type="submit" name="generate" id="generate" value="Codes generieren">
    </form>

    <table>
        <tr>
            <th>Code</th>
            <th>Betrag</th>
            <th>&nbsp;</th>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['rep']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['rep']->value)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 1, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['code']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['amount']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                <td>
                    <form method="post" name="activate" action="../../php/activate.php">
                        <input type="hidden" name="id" id="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['n']->value];?>
>
                        <input type="submit" name="activate" id="activate" value="Aktivieren">
                    </form>
                </td>
            </tr>
        <?php }
}
?>

    </table>
</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
