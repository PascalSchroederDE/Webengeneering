<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/payment.css">

    <script type="text/javascript" src="../../js/jump.js"></script>
    <script type="text/javascript" src="../../js/pasteEvent.js"></script>

</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Geben Sie hier ihren Gutscheincode ein</h3>

    <form id="getcred" name="getcred" method="post" action="../../php/get_credits.php">
        <p class="get_credits">
            <input type="text" class="coupon" id="coupon1" onkeyup="jump(this, 'coupon2')" onpaste="pasteEvent(this)" name="coupon1" placeholder="****"><a>-</a>
            <input type="text" class="coupon" maxlength="4" id="coupon2" onkeyup="jump(this, 'coupon3')" name="coupon2" placeholder="****"><a>-</a>
            <input type="text" class="coupon" maxlength="4" id="coupon3" onkeyup="jump(this, 'coupon4')" name ="coupon3" placeholder="****"><a>-</a>
            <input type="text" class="coupon" maxlength="4" id="coupon4" name="coupon4" placeholder="****">
        </p>

        <p class="credits_amount">
            <a>Betrag*: </a>
            <select name="amount" id="amount">
                <option value="10">10€</option>
                <option value="50">50€</option>
                <option value="100">100€</option>
            </select>
        </p>

        <p class="credits_submit" align="center">
            <input type="submit" value="Absenden">
        </p>
    </form>

    <p class="foot">
        <a>Noch kein Gutscheincode?</a> <a href="../user/get_coupon.php">Hier bestellen!</a>
    </p>

</div>

<div id="footer">
    * Angabe wird als zusätzliche Sicherheitsmaßnahme benötigt
</div>

</div>
</body>
</html>