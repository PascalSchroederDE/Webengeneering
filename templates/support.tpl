<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/support.css">

    <script type="text/javascript" src="../../js/regex_support.js"></script>
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Support anschreiben (Fragen etc.)</h3>

    <form method="post" name="support" id="support" action="../../php/support.php" onsubmit="return control()">
        <p>
            <a>Betreff: </a>
            <input type="text" name="subject" id="subject" style="margin-left:80px" placeholder="Betreff"/>
        </p>

        <p class="additional_coupon">
            <a>Anliegen:</a>
        </p>
        <p>
            <textarea name="matter" id="matter" placeholder="Geben Sie ihr Anliegen ein" rows="20"></textarea>
        </p>

        <input type="submit" name="get_coupon" id="get_coupon" value="Absenden"/>
    </form>

    <p class="foot">Der Administrator meldet sich per Mail bei Ihnen</p>
</div>

<div id="footer">

</div>

</div>
</body>
</html>