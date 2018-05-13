<?php
/* Smarty version 3.1.30, created on 2018-04-07 16:55:27
  from "/users/webeng/www/templates/user_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac8dbdf206a84_43218641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ec802cacd804091620b1bdd6b0a66822d76512' => 
    array (
      0 => '/users/webeng/www/templates/user_list.tpl',
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
function content_5ac8dbdf206a84_43218641 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3>Userliste</h3>
    <table>
        <tr>
            <th>Benutzername</th>
            <th>Name</th>
            <th>Geschlecht</th>
            <th>Geburtsdatum</th>
            <th>Mitglied seit</th>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['max_count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max_count']->value)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 1, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['name']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sex']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['birthdate']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datetime']->value[$_smarty_tpl->tpl_vars['n']->value];?>
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
