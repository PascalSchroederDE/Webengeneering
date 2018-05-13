<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/xyz.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">

    <h3>Test</h3>

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
</html>