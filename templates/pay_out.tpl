<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/support.css">

    <script type="text/javascript" src="../../js/regex_credit.js"></script>
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Guthaben auszahlen lassen (derzeit <?php echo $credit; ?> €)</h3>

    <form method="post" name="pay_out" id="pay_out" action="../../php/pay_out_mail.php" onsubmit="return control()">
        <p>
            <a>Betrag: </a>
            <input type="number" style="margin-right:5px;" name="amount_pay_out" id="amount_pay_out" placeholder="Geldbetrag" step="0.01" min="0" max="<?php echo $credit;?>" onblur="if(this.value><?php echo $credit;?>){this.value=<?php echo $credit;?>;} if(this.value<0){this.value=0;}"/>
            <a>€</a>
        </p>


        <p>
            <a>Gewünschte Zahlungsmethode: </a>
            <input type="text" name="payment_method" id="payment_method" placeholder="Zahlungsmethode"/>
        </p>

        <p class="additional_coupon">
            <a>Anmerkung:</a>
        </p>
        <p>
            <textarea name="annotation" id="annotation" placeholder="Zusätzliche Anmerkung" rows="20"></textarea>
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