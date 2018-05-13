<?php /* Smarty version 2.6.31, created on 2018-04-06 02:08:07
         compiled from header.tpl */ ?>
<?php if ($this->_tpl_vars['login'] != true): ?>
    <div class="login">
        <div class="login-form">
            <form action="php/login.php" method="post" onsubmit="return controllogin()">
                <div class="usrText">
                    <input type="text" name="user" id="user" placeholder="Benutzername" required="required">
                </div>
                <div class="pwdText">
                    <input type="password" name="pass" id="pass" placeholder="Passwort" required="required">
                </div>
                <input type="submit" name="login" value="Anmelden" id="loginBtn">
            </form>
            <form action="register.php" method="post">
                <input type="submit" name="reg" value="Registrieren" id="registerBtn">
            </form>
            <div class="closeUser">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/notLoggedIn.js"></script>
<?php else: ?>
    <script type="text/javascript" src="js/loggedIn.js"></script>
<?php endif; ?>

<div class="full-width search">
    <div class="search-form">
        <form name="search" id="search" method="/search.php" action="search.php">
            <input type="text" name="search" id="search" placeholder="Suche..." minlength="3" required="required">
            <div class="closeSearch">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </form>
    </div>
    <div class="full-width navbar">
        <h2 class="brand">Kleinanzeigen</h2>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="new_article.php">Neue Angebote</a></li>
            <li class="dropdown">
                <a href="category.php" class="dropbtn">Kategorien</a>
                <div class="dropdown-content">
                    <a href="electronic.php">Elektronik</a>
                    <a href="home.php">Haushalt</a>
                    <a href="clothes.php">Kleidung</a>
                    <a href="freetime.php">Sport & Freizeit</a>
                    <a href="other.php">Sonstiges</a>
                </div>
            </li>
            <li><a href="support.php">Support</a></li>
            <?php if ($this->_tpl_vars['login'] == true): ?>
            <li class="dropdownLoggedIn">
                <a><i class="fa fa-user" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                    <a href="settings.php">Hallo <?php echo $this->_tpl_vars['username']; ?>
</a>
                    <a href="get_credits.php" class="credit" href="credit.php"><?php echo $this->_tpl_vars['credit']; ?>
 €</a>
                    <a href="create_auction.php">Angebot erstellen</a>
                    <a href="my_auctions.php">Angebote</a>
                    <a href="log.php">Käufe & Verkäufe</a>
                    <a href="php/logout.php">Abmelden</a>
                </div>
            </li>
            <?php else: ?>
            <li class="dropdownLoggedOut">
                <a class="user-icon"><i class="fa fa-unlock" aria-hidden="true"></i></a>
            </li>
            <?php endif; ?>
            <li><a class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        </ul>
        <div style="clear:both"></div>
    </div>
</div>

<div id="page">
    <p id="line" class="bot">