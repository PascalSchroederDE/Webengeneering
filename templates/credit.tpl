<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/preview.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Ihr Guthaben beträgt derzeit {$credit} € </h3>

    <div id="preview" onclick="location.href='view/user/get_credits.php'">
        <img src="img/euro.png">
        <p>
        <h2>Guthaben aufladen</h2></p>
        <p class="condition">Geben Sie ihren Gutscheincode ein</p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>

    <div id="preview" onclick="location.href='view/user/pay_out.php'">
        <img src="img/dollar.png">
        <p>
        <h2>Guthaben auszahlen lassen</h2></p>
        <p class="condition">Lassen Sie sich ihr Guthaben wieder auszahlen </p>
        <p>
        <h1>&nbsp;</h1></p>
        <p class="delivery">&nbsp;</p>
        <p class="delivery">&nbsp;</p>
    </div>

    <div id="preview" onclick="location.href='view/user/get_coupon.php'">
        <img src="img/coupon.png">
        <p>
        <h2>Gutscheincode erwerben</h2></p>
        <p class="condition">Erwerben Sie - mit der Zahlungsmethode ihrer Wahl - einen Gutscheincode</p>
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
