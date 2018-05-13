<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/log.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Userliste</h3>
    <table>
        <tr>
            <th>Benutzername</th>
            <th>Name</th>
            <th>Geschlecht</th>
            <th>Geburtsdatum</th>
            <th>Mitglied seit</th>
        </tr>
        {for $n=1 to $max_count}
            <tr>
                <td>{$user[$n]}</td>
                <td>{$name[$n]}</td>
                <td>{$sex[$n]}</td>
                <td>{$birthdate[$n]}</td>
                <td>{$datetime[$n]}</td>
            </tr>
        {/for}
    </table>
</div>

<div id="footer">

</div>

</div>
</body>
</html>