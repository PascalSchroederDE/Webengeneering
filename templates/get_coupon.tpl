<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/support.css">

    <script type="text/javascript" src="../../js/regex_credit.js"></script>
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Gutscheincode erwerben</h3>

    <form method="post" id="get_coupon" name="get_coupon" action="../../php/get_coupon_mail.php" onsubmit="return control()">
        <p>
            <a>Betrag: </a>
            <select name="amount" id="amount">
                <option value="10">10€</option>
                <option value="50">50€</option>
                <option value="100">100€</option>
            </select>
        </p>


        <p>
            <a>Gewünschte Zahlungsmethode: </a>
            <input type="text" name="payment_method" id="payment_method" placeholder="Zahlungsmethode"/>
        </p>

        <p class="additional_coupon">
            <a>Anmerkung:</a>
        </p>
        <p>
            <textarea name="annotation" id="annotation" class="annotation" placeholder="Zusätzliche Anmerkung" rows="20"></textarea>
        </p>

        <input type="submit" name="get_coupon" id="get_coupon" value="Absenden"/>
    </form>

    <p class="foot">Alles weitere wird per Mail geklärt</p>
</div>

<div id="footer">

</div>

</div>
</body>
</html>