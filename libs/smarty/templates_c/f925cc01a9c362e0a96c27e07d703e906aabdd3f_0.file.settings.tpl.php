<?php
/* Smarty version 3.1.30, created on 2018-05-13 21:40:02
  from "/users/webeng/www/templates/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af89492e706f5_49309442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f925cc01a9c362e0a96c27e07d703e906aabdd3f' => 
    array (
      0 => '/users/webeng/www/templates/settings.tpl',
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
function content_5af89492e706f5_49309442 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/profile.css">
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>


<div id="main">
    <div id="profile">
        <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
            <a class="admin" href="../admin">Admin-Modus</a>
        <?php }?>
        <h3>Mein Profil</h3>
        <table>
            <tr>
                <td>
                    <p class="email"><b>E-Mail-Adresse:</b> <?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</p>
                    <p class="prename"><b>Vorname:</b> <?php echo $_smarty_tpl->tpl_vars['prename']->value;?>
</p>
                    <p class="sex"><b>Geschlecht:</b> <?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
</p>
                </td>
                <td>
                    <p class="username"><b>Benutzername:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</p>
                    <p class="name"><b>Name:</b> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
                    <p class="birth"><b>Geburtsdatum:</b> <?php echo $_smarty_tpl->tpl_vars['birth']->value;?>
</p>
                </td>
            </tr>
        </table>
    </div>

    <p id="cpw"><a
                onclick="if(document.getElementById('change_pw').style.display=='none') { document.getElementById('change_pw').style.display='block';} else { document.getElementById('change_pw').style.display='none';}">Passwort
            &auml;ndern</a></p>
    <div id="change_pw" style="display:none;">
        <form action="../../php/changepw.php" method="post">
            <input type="password" name="oldpw" id="oldpw" placeholder="Altes Passwort"/>
            <input type="password" name="pw" id="pw" placeholder="Neues Passwort"/>
            <input type="password" name="rep_pw" id="rep_pw" placeholder="Passwort wiederholen"/>
            <input type="submit" name="changepw" id="changepw" value="&Auml;ndern"/>
        </form>
    </div>

    <form action="my_auctions.php" method="post"><input type="submit" name="get_actions" value="Angebote"></form>

    <div id="address">
        <h3>Adressen</h3>
        <table class="address">
            <tr>
                <th>PLZ</th>
                <th>Wohnort</th>
                <th>Stra&szlig;e</th>
                <th>Hausnr.</th>
                <th>&nbsp;</th>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['address_amount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['address_amount']->value)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 1, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
                <form method="post" name="setdef" id="setdef" action="../../php/setdefadd.php">
                    <?php if ($_smarty_tpl->tpl_vars['n']->value == $_smarty_tpl->tpl_vars['default_address']->value) {?><b><?php }?>
                        <td><a><?php echo $_smarty_tpl->tpl_vars['zip']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</a></td>
                        <td><a><?php echo $_smarty_tpl->tpl_vars['city']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</a></td>
                        <td><a><?php echo $_smarty_tpl->tpl_vars['street']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</a></td>
                        <td><a><?php echo $_smarty_tpl->tpl_vars['number']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</a></td>
                        <td>
                            <input type="hidden" name="adid" id="adid" value=<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['n']->value];?>
/>
                            <input type="submit" name="def" id="def" value="Als Standard"/>
                        </td>
                    <?php if ($_smarty_tpl->tpl_vars['n']->value == $_smarty_tpl->tpl_vars['default_address']->value) {?></b><?php }?>
                </form>
                </tr>
            <?php }
}
?>

            <tr>
        </table>
        <div id="add_address" style="display:none">
            <form action="../../php/add_address.php" method="post">
                <p>
                    <input type="number" name="zip" id="zip" min="10000" max="99999" placeholder="12345"/>
                    <input type="text" name="city" id="city" placeholder="Wohnort"/>
                    <input type="text" name="street" id="street" placeholder="Stra&szlig;e"/>
                    <input type="text" name="number" id="number" placeholder="1a"/>
                    <input type="submit" name="save" id="save" value="Speichern"/>
                </p>
            </form>
        </div>
        <input type="submit" name="add_address" id="add_address" value="Hinzuf&uuml;gen"
               onclick="if(document.getElementById('add_address').style.display=='none') { document.getElementById('add_address').style.display='block'; this.value='Einklappen' } else { document.getElementById('add_address').style.display='none'; this.value='Hinzuf&uuml;gen'; }"/>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html><?php }
}
