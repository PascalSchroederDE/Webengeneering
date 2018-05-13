<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/preview.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Admin-Interface</h3>

    <div id="preview" onclick="location.href='../admin/user_list.php'">
        <img src="../../img/human.png" width="500px">
        <p>
        <h2>Benutzerliste</h2></p>
        <p class="condition">Alle Benutzer und dazugehörige Daten</p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>

    <div id="preview" onclick="location.href='../admin/buy_list.php'">
        <img src="../../img/euro.png" width="500px">
        <p>
        <h2>Kaufliste</h2></p>
        <p class="condition">Alle Käufe von neu bis alt</p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>

    <div id="preview" onclick="location.href='../admin/coupon_code_list.php'">
        <img src="../../img/coupon.png" width="500px">
        <p>
        <h2>Gutscheincodes</h2></p>
        <p class="condition">Alle Gutscheincodes zum kopieren und aktivieren</p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html>