<html>

  <head>
	  {include file='head.tpl'}

	  <link rel="stylesheet" type="text/css" href="../../css/index.css">
  </head>

  {include file='header.tpl' login=$login username=$username credit=$credit}

  <div id="page">
      <p id="line" class="bot">
          <div id="main">
                <h3>Auktionshaus</h3>
                    <a href="../../view/main/auction.php?artid={$id}"><img src="img.php?artid={$id}&id=0">
                    <p><h2>{$title}</h2></p></a>

                    <a> Siehe diese und weitere Angebote auf dieser Website!</a><br>
                    <a> Melde dich jetzt an, um Angebote zu erstellen und zu kaufen!</a>
              </div>

              <div id="footer">

              </div>

            </div>

</html>