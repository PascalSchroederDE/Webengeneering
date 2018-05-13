<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/log.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Gutschein-Codes</h3>

    <form id="cod_gen" name="cod_gen" method="post" action="../../php/code_gen.php">
        <a>Betrag: </a>
        <select name="amount" id="amount">
            <option value="10">10€</option>
            <option value="50">50€</option>
            <option value="100">100€</option>
        </select>
        <a>Anzahl: </a>
        <input type="number" step="1" value="1" min="0" max="100" name="repeat" id="repeat">
        <input type="submit" name="generate" id="generate" value="Codes generieren">
    </form>

    <table>
        <tr>
            <th>Code</th>
            <th>Betrag</th>
            <th>&nbsp;</th>
        </tr>
        {for $n=1 to $rep}
            <tr>
                <td>{$code[$n]}</td>
                <td>{$amount[$n]}</td>
                <td>
                    <form method="post" name="activate" action="../../php/activate.php">
                        <input type="hidden" name="id" id="id" value={$id[$n]}>
                        <input type="submit" name="activate" id="activate" value="Aktivieren">
                    </form>
                </td>
            </tr>
        {/for}
    </table>
</div>

<div id="footer">

</div>

</div>
</body>
</html>