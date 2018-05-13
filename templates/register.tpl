<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/register.css">

    <script type="text/javascript" src="../../js/password.js"></script>
    <script type="text/javascript" src="../../js/regex_register.js"></script>
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}


<div id="register_field">
    <form id="register" name="register" method="post" action="../../php/register.php" onsubmit="return control()">
        <h1>Neu? Jetzt anmelden!</h1>
        <table style="margin-top:-20px">
            <tr>
                <td class="nec">
                    <p><h2>Notwendige Informationen</h2></p>
                    <p>E-Mail-Adresse*: <input type="text" name="email" id="email" placeholder="E-Mail Adresse"></p>
                    <p>Benutzername*:
                        <input type="text" name="username" id="username" placeholder="Benutzername" onkeyup="UsernameCheck()"">
                    </p>
                    <p>Passwort*:
                        <object align="right" name="pw_strongness" id="pw_strongness" class="circle_red"></object>
                        <input type="password" name="pw" id="pw" placeholder="Passwort" onkeyup="PasswordStrongness()" style="margin-right:18px;">
                    </p>
                    <p>Passwort wiederholen*:
                        <object align="right" name="rep_pw_check" id="rep_pw_check" class="circle_red"></object>
                        <input type="password" name="rep_pw" id="rep_pw" placeholder="Passwort wiederholen" onkeyup="PasswordRepeat()" style="margin-right:18px;">
                    </p>
                    <p>&nbsp;</p>
                </td>
                <td class="add">
                    <p><h2>Zusätzliche Informationen (Profil)</h2></p>
                    <p>Titel:
                        <select name="title">
                            <option value=""></option>
                            <option value="Doktor">Doktor</option>
                            <option value="Professor">Professor</option>
                        </select>
                    </p>
                    <p>Vorname*: <input type="text" name="prename" id="prename" placeholder="Vorname"></p>
                    <p>Name*: <input type="text" name="name" id="name" placeholder="Nachname"></p>
                    <p>Geschlecht:
                        <select name="sex" id="sex">
                            <option value=""></option>
                            <option value="männlich">männlich</option>
                            <option value="weiblich">weiblich</option>
                        </select>
                    </p>
                    <p>Geburtsdatum*:
                        <a class="birth">
                            <input type="number" min="01" max="31" step="1" name="day" id="day" placeholder="DD" class="day">
                            <input type="number" min="01" max="12" step="1" name="month" id="month" placeholder="MM" class="month">
                            <input type="number" min="1900" max="2015" step="1" name="year" id="year"placeholder="YYYY" class="year">
                        </a>
                    </p>
                </td>
            </tr>
        </table>
        <input type="submit" name="register" id="register" value="Registrieren">
        <input type="checkbox" name="agb" id="agb" style="float:right" value="TRUE">
        <p class="agb">Ich erkläre mich mit den <a href="agb.php" target="_blank">Nutzungsbedingungen</a> einverstanden</p>
    </form>
</div>
<div id="footer">
    <p>* Pflichtangaben</p>
    <p>** Wird beim Verkauf benötigt, um Geld überweisen zu lassen</p>
</div>

</div>
</body>
</html>