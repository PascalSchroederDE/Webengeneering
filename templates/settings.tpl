<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/profile.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <div id="profile">
        {if $admin==true}
            <a class="admin" href="../admin">Admin-Modus</a>
        {/if}
        <h3>Mein Profil</h3>
        <table>
            <tr>
                <td>
                    <p class="email"><b>E-Mail-Adresse:</b> {$mail}</p>
                    <p class="prename"><b>Vorname:</b> {$prename}</p>
                    <p class="sex"><b>Geschlecht:</b> {$sex}</p>
                </td>
                <td>
                    <p class="username"><b>Benutzername:</b> {$user}</p>
                    <p class="name"><b>Name:</b> {$name}</p>
                    <p class="birth"><b>Geburtsdatum:</b> {$birth}</p>
                </td>
            </tr>
        </table>
    </div>

    <p id="cpw"><a
                onclick="if(document.getElementById('change_pw').style.display=='none') { document.getElementById('change_pw').style.display='block';} else { document.getElementById('change_pw').style.display='none';}">Passwort
            &auml;ndern</a></p>
    <div id="change_pw" style="display:none;">
        <form action="../../php/changepw.php" method="post">
            <input type="password" name="oldpw" id="oldpw" placeholder="Altes Passwort"/>
            <input type="password" name="pw" id="pw" placeholder="Neues Passwort"/>
            <input type="password" name="rep_pw" id="rep_pw" placeholder="Passwort wiederholen"/>
            <input type="submit" name="changepw" id="changepw" value="&Auml;ndern"/>
        </form>
    </div>

    <form action="my_auctions.php" method="post"><input type="submit" name="get_actions" value="Angebote"></form>

    <div id="address">
        <h3>Adressen</h3>
        <table class="address">
            <tr>
                <th>PLZ</th>
                <th>Wohnort</th>
                <th>Stra&szlig;e</th>
                <th>Hausnr.</th>
                <th>&nbsp;</th>
            </tr>
            {for $n=1 to $address_amount}
                <form method="post" name="setdef" id="setdef" action="../../php/setdefadd.php">
                    {if $n==$default_address}<b>{/if}
                        <td><a>{$zip[$n]}</a></td>
                        <td><a>{$city[$n]}</a></td>
                        <td><a>{$street[$n]}</a></td>
                        <td><a>{$number[$n]}</a></td>
                        <td>
                            <input type="hidden" name="adid" id="adid" value={$id[$n]}/>
                            <input type="submit" name="def" id="def" value="Als Standard"/>
                        </td>
                    {if $n==$default_address}</b>{/if}
                </form>
                </tr>
            {/for}
            <tr>
        </table>
        <div id="add_address" style="display:none">
            <form action="../../php/add_address.php" method="post">
                <p>
                    <input type="number" name="zip" id="zip" min="10000" max="99999" placeholder="12345"/>
                    <input type="text" name="city" id="city" placeholder="Wohnort"/>
                    <input type="text" name="street" id="street" placeholder="Stra&szlig;e"/>
                    <input type="text" name="number" id="number" placeholder="1a"/>
                    <input type="submit" name="save" id="save" value="Speichern"/>
                </p>
            </form>
        </div>
        <input type="submit" name="add_address" id="add_address" value="Hinzuf&uuml;gen"
               onclick="if(document.getElementById('add_address').style.display=='none') { document.getElementById('add_address').style.display='block'; this.value='Einklappen' } else { document.getElementById('add_address').style.display='none'; this.value='Hinzuf&uuml;gen'; }"/>
    </div>
</div>

<div id="footer">

</div>

</div>
</body>
</html>