<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/log.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <div id="purchases">
        <h3>Käufe</h3>

        <table>
            <tr>
                <th>Artikel</th>
                <th>Preis</th>
                <th>Versandkosten</th>
                <th>Verkäufer</th>
                <th>Gekauft am</th>
            </tr>
            {for $n=$last_id to $invalid_purchases+1 step -1}
                <tr>
                    <td>{$art_title_buy[$n]}</td>
                    <td>{$art_price_buy[$n]} €</td>
                    <td>{$del_price_buy[$n]} €</td>
                    <td>{$seller[$n]}</td>
                    <td>{$date_buy[$n]}</td>
                </tr>
            {/for}
        </table>
    </div>
    <div id="sales">
        <h3>Verkäufe</h3>
        <table>
            <tr>
                <th>Artikel</th>
                <th>Preis</th>
                <th>Versandkosten</th>
                <th>Käufer</th>
                <th>Verkauft am</th>
            </tr>
            {for $n=$last_id to $invalid_sales+1 step -1}
                <tr>
                    <td>{$art_title_sale[$n]}</td>
                    <td>{$art_price_sale[$n]} €</td>
                    <td>{$del_price_sale[$n]} €</td>
                    <td>{$buyer[$n]}</td>
                    <td>{$date_sale[$n]}</td>
                </tr>
            {/for}
        </table>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html>