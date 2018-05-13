<?php
/* Smarty version 3.1.30, created on 2018-04-06 23:59:55
  from "/users/webeng/www/header.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac7eddba27a43_03435171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a2841639dde8dc1449d690a1373a50fe45c3464' => 
    array (
      0 => '/users/webeng/www/header.php',
      1 => 1523040475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac7eddba27a43_03435171 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
    ';?>session_start();

    require_once("php/connect.php");

    $userid=$_SESSION['userid'];

    $con = connect();
    $credit_query=mysqli_query($con,"SELECT credit FROM credit WHERE userid='$userid'");

    $row_credit = mysqli_fetch_assoc($credit_query);

    $credit = $row_credit['credit'];

    $data = array(
        'login' => $_SESSION['login'],
        'username' => $_SESSION['prename'],
        'credit' => $credit
    );

    require_once('libs/smtemplate.php');
    $tpl = new SMTemplate();
    $tpl->render('header', $data);
<?php echo '?>';
}
}
