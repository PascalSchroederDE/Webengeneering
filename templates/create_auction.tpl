<html>

<head>
    <title>Auktionshaus</title>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/create_auction.css">

    <script type="text/javascript" src="../../js/regex_art_creation.js"></script>
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    <h3>Angebot erstellen</h3>

    <form id="creation" name="creation" method="post" action="../../php/creation.php" enctype="multipart/form-data"
          onsubmit="return control()">
        <h2 class="title">Titel*:
            <input type="text" name="title" id="title" class="title" placeholder="Titel"></h2>

        <p>
        <h2 class="mainly"><a class="left">Kategorie:</a>
            <select name="category">
                <option value=""></option>
                <option value="Elektronik">Elektronik</option>
                <option value="Haushalt">Haushalt</option>
                <option value="Kleidung">Kleidung</option>
                <option value="Sportfreizeit">Sport & Freizeit</option>
                <option value="Sonstiges">Sonstiges</option>
            </select>
            <a class="right">Preis*:</a>
            <input type="number" name="price" id="price" class="h2" step="0.01" placeholder="z.B. 19,99"><a
                    class="euro">€</a></h2>
        </p>


        <p>
        <h1 class="delivery"><a class="left">Versandkosten*:</a>
            <input type="number" name="delivery_costs" id="delivery_costs" step="0.01" placeholder="z.B. 3,50"><a
                    class="euro">€</a>
            <a class="right">Versanddauer**:</a>
            <input type="text" name="delivery_time" id="delivery_time" placeholder="z.B. 3-4"><a class="werktage">Werktage</a>
        </h1></p>

        <p>
        <h1 class="product"><a class="left">Produktart*:</a>
            <input type="text" name="product_type" id="product_type" placeholder="Produktart">
            <a class="right">Artikelzustand:</a>
            <select name="condition">
                <option value=""></option>
                <option value="Neu">Neu</option>
                <option value="Generalüberholt">Generalüberholt</option>
                <option value="Fastwieneu">Fast wie neu</option>
                <option value="Gebrauchtguterzustand">Gebraucht (guter Zustand)</option>
                <option value="Gebraucht">Gebraucht</option>
            </select>
        </h1>
        </p>

        <p>
        <h1 class="producer"><a class="left">Hersteller:</a>
            <input type="text" name="producer" id="producer" placeholder="Hersteller">
            <a class="right">Modellname:</a>
            <input type="text" name="model" id="model" placeholder="Modellname"></h1></p>

        <h2 class="description">Beschreibung*:</h2>
        <textarea name="description" id="description" class="description"
                  placeholder="Geben sie hier ihre Beschreibung ein" rows="20"></textarea>

        <input type="file" name="img" value="Bilder hochladen" accept="image/*" multiple>

        <input type="submit" name="create" id="create" value="Angebot erstellen">
    </form>
</div>

<div id="footer">
    * Pflichtangaben
    ** Geschätzte Versanddauer innerhalb Deutschlands
</div>

</div>
</body>
</html>