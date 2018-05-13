<!-- navigation bar etc. -->
{if $login != true}
    <div class="login">
        <div class="login-form">
            <form action="../../php/login.php" method="post" onsubmit="return controllogin()">
                <div class="usrText">
                    <input type="text" name="user" id="user" placeholder="Benutzername" required="required">
                </div>
                <div class="pwdText">
                    <input type="password" name="pass" id="pass" placeholder="Passwort" required="required">
                </div>
                <input type="submit" name="login" value="Anmelden" id="loginBtn">
            </form>
            <form action="../user/register.php" method="post">
                <input type="submit" name="reg" value="Registrieren" id="registerBtn">
            </form>
            <div class="closeUser">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../../js/notLoggedIn.js"></script>
{else}
    <script type="text/javascript" src="../../js/loggedIn.js"></script>
{/if}

<div class="full-width search">
    <div class="search-form">
        <form name="search" id="search" method="../category/search.php" action="search.php">
            <input type="text" name="search" id="search" placeholder="Suche..." minlength="3" required="required">
            <div class="closeSearch">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </form>
    </div>
    <div class="full-width navbar">
        <h2 class="brand">Kleinanzeigen</h2>
        <ul>
            <li><a href="../../index.php" class="active">Home</a></li>
            <li><a href="../category/new_article.php">Neue Angebote</a></li>
            <li class="dropdown">
                <a href="../category" class="dropbtn">Kategorien</a>
                <div class="dropdown-content">
                    <a href="../category/electronic.php">Elektronik</a>
                    <a href="../category/home.php">Haushalt</a>
                    <a href="../category/clothes.php">Kleidung</a>
                    <a href="../category/freetime.php">Sport & Freizeit</a>
                    <a href="../category/other.php">Sonstiges</a>
                </div>
            </li>
            <li><a href="../main/support.php">Support</a></li>
            {if $login == true}
            <li class="dropdownLoggedIn">
                <a><i class="fa fa-user" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                    <a href="../user">Hallo {$username}</a>
                    <a href="../user/get_credits.php" class="credit" href="credit.php">{$credit} €</a>
                    <a href="../user/create_auction.php">Angebot erstellen</a>
                    <a href="../user/my_auctions.php">Angebote</a>
                    <a href="../user/purchases_log.php">Käufe & Verkäufe</a>
                    <a href="../../php/logout.php">Abmelden</a>
                </div>
            </li>
            {else}
            <li class="dropdownLoggedOut">
                <a class="user-icon"><i class="fa fa-unlock" aria-hidden="true"></i></a>
            </li>
            {/if}
            <li><a class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        </ul>
        <div style="clear:both"></div>
    </div>
</div>

<div id="page">
    <p id="line" class="bot">