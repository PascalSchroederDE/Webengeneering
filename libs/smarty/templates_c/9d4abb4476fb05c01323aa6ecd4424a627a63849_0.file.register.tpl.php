<?php
/* Smarty version 3.1.30, created on 2018-04-28 21:39:11
  from "/users/webeng/www/templates/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae4cddf4c02b5_66539695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d4abb4476fb05c01323aa6ecd4424a627a63849' => 
    array (
      0 => '/users/webeng/www/templates/register.tpl',
      1 => 1524944305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ae4cddf4c02b5_66539695 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="../../css/register.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/password.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/regex_register.js"><?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('login'=>$_smarty_tpl->tpl_vars['login']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'credit'=>$_smarty_tpl->tpl_vars['credit']->value), 0, false);
?>



<div id="register_field">
    <form id="register" name="register" method="post" action="../../php/register.php" onsubmit="return control()">
        <h1>Neu? Jetzt anmelden!</h1>
        <table id="table">
            <tr>
                <td class="nec">
                    <p><h2>Notwendige Informationen</h2></p>
                    <p>E-Mail-Adresse*: <input type="text" name="email" id="email" placeholder="E-Mail Adresse"></p>
                    <p>Benutzername*:
                        <input type="text" name="username" id="username" placeholder="Benutzername" onkeyup="UsernameCheck()"">
                    </p>
                    <p>Passwort*:
                        <object align="right" name="pw_strongness" id="pw_strongness" class="circle_red"></object>
                        <input type="password" name="pw" id="pw" placeholder="Passwort" onkeyup="PasswordStrongness()" style="margin-right:18px; margin-left:2px;">
                    </p>
                    <p>Passwort wiederholen*:
                        <object align="right" name="rep_pw_check" id="rep_pw_check" class="circle_red"></object>
                        <input type="password" name="rep_pw" id="rep_pw" placeholder="Passwort wiederholen" onkeyup="PasswordRepeat()" style="margin-right:18px; margin-left:2px;">
                    </p>
                    <p>&nbsp;</p>
                </td>
                <td class="add">
                    <p><h2>Zusätzliche Informationen (Profil)</h2></p>
                    <p>Titel:
                        <select name="title">
                            <option value=""></option>
                            <option value="Doktor">Doktor</option>
                            <option value="Professor">Professor</option>
                        </select>
                    </p>
                    <p>Vorname*: <input type="text" name="prename" id="prename" placeholder="Vorname"></p>
                    <p>Name*: <input type="text" name="name" id="name" placeholder="Nachname"></p>
                    <p>Geschlecht:
                        <select name="sex" id="sex">
                            <option value=""></option>
                            <option value="männlich">männlich</option>
                            <option value="weiblich">weiblich</option>
                        </select>
                    </p>
                    <p>Geburtsdatum*:
                        <a class="birth">
                            <input type="number" min="01" max="31" step="1" name="day" id="day" placeholder="DD" class="day">
                            <input type="number" min="01" max="12" step="1" name="month" id="month" placeholder="MM" class="month">
                            <input type="number" min="1900" max="2015" step="1" name="year" id="year"placeholder="YYYY" class="year">
                        </a>
                    </p>
                </td>
            </tr>
        </table>
        <input type="submit" name="register" id="register" value="Registrieren">
        <input type="checkbox" name="agb" id="agb" style="float:right" value="TRUE">
        <p class="agb">Ich erkläre mich mit den <a href="agb.php" target="_blank">Nutzungsbedingungen</a> einverstanden</p>
    </form>
</div>
<div id="footer">
    <p>* Pflichtangaben</p>
    <p>** Wird beim Verkauf benötigt, um Geld überweisen zu lassen</p>
</div>

</div>
</body>
</html><?php }
}
