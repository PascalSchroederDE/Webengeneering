<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/preview.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Kategorien</h3>

    <div id="preview" onclick="location.href='electronic.php'">
        <div id="img">
            <img src="../../img/computer.png">
        </div>
        <div class="cattext">
            <p><h2>Elektronik</h2></p>
            <p class="condition">Handys, Laptops, PCs & Ähnliches </p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='home.php'">
        <div id="img">
            <img src="../../img/house.png">
        </div>
        <div class="cattext">
            <p><h2>Haushalt</h2></p>
            <p class="condition">Waschmaschinen, Küchen, Tische & Ähnliches</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='clothes.php'">
        <div id="img">
            <img src="../../img/tshirt.png">
        </div>
        <div class="cattext">
            <p><h2>Kleidung</h2></p>
            <p class="condition">Oberteile, Hosen, Schuhe etc.</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='freetime.php'">
        <div id="img">
            <img src="../../img/ball.png">
        </div>
        <div class="cattext">
            <p><h2>Sport & Freizeit</h2></p>
            <p class="condition">Bälle, Tennisschläger, Gesellschaftsspiele etc.</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>

    <div id="preview" onclick="location.href='other.php'">
        <div id="img">
            <img src="../../img/point.png">
        </div>
        <div class="cattext">
            <p><h2>Sonstiges</h2></p>
            <p class="condition">Andere Gegenstände</p>
            <p><h1>&nbsp;</h1></p>
            <p class="delivery">&nbsp;</p>
            <p class="delivery">&nbsp;</p>
        </div>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html>