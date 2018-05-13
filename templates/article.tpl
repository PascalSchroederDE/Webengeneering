<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/auction.css">

    <script type="text/javascript" src="../../js/switch.js"></script>
    <script type="text/javascript" src="../../js/edit.js"></script>

    <script type="text/javascript" src="../../js/regex_art_editation.js"></script>		  <meta name="viewport" content="width=device-width, initial-scale=1">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">

    <!-- Only seller or admin can delete article -->
    {if $seller_is_user OR $user_is_admin}
        <form id="delete" name="delete" method="post" action="../../php/delete.php">
            <input name="artid" id="artid" type="hidden" value={$article_id}/>

            <button id="subdel" name="subdel" type="submit">
                <img src="../../img/delete.png" class="edit" onmousedown="this.src='../../img/delete_active.png';"
                     onmouseup="this.src='../../img/delete.png';" onmouseover="this.src='../../img/delete_hover.png';"
                     onmouseleave="this.src='../../img/delete.png';"/>
            </button>

        </form>
    {/if}

    <!-- Only seller can edit article -->
    {if $seller_is_user}
        <img src="../../img/edit.png" class="edit" onmousedown="this.src='../../img/edit_active.png';"
             onmouseup="this.src='../../img/edit.png';" onmouseover="this.src='../../img/edit_hover.png';"
             onmouseleave="this.src='../../img/edit.png';" onclick="edit();"/>
    {/if}

    <div id="show_main">
        <h3>
            <a id="title_id">{$title}</a>
        </h3>

        <table>
            <tr>
                <td class="pic">															<div id="myCarousel" class="carousel slide" data-ride="carousel">					  <!-- Indicators -->					  <ol class="carousel-indicators">					  {for $n=0 to $img_amount-1}						<li data-target="#myCarousel" data-slide-to="{$n}" {if $n==0}class="active"{/if}></li>					  {/for}					  </ol>					  <!-- Wrapper for slides -->					  <div class="carousel-inner">					  {for $i=0 to $img_amount-1}						<div class="item{if $i==0} active{/if}">						  <img src='../main/img.php?artid={$article_id}&id={$i}' id="big">						</div>					  {/for}					  <!-- Left and right controls -->					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">						<span class="glyphicon glyphicon-chevron-left"></span>						<span class="sr-only">Previous</span>					  </a>					  <a class="right carousel-control" href="#myCarousel" data-slide="next">						<span class="glyphicon glyphicon-chevron-right"></span>						<span class="sr-only">Next</span>					  </a>					</div>
                </td>
                <td class="text">
                    <h2>
                        <a id="model_id">{$producer} {$model}</a>
                    </h2>

                    <p class="condition">
                        Artikelzustand: <a id="condition_id"><b>{$condition}</b></a>
                    </p>
                    <p class="price">
                        Preis: <a id="price_id"><b>{$price}</b></a>
                    </p>
                    <p class="seller">Verkäufer: {$seller}</p>
                    <p class="cre_date">Erstellt: <b>{$cre_date} - {$cre_time}</b></p>
                    <p><form id="buy" name="buy" method="post" action="../../php/buy.php">
                        <input type="hidden" name="id_article" id="id_article" value={$article_id}/>
                        <input type="submit" id="buy" name="buy" value="Kaufen"></input>
                    </form></p>

                    <p class="delivery" id="costs">
                        Versandkosten: <a id="del_price_id"><b>{$delprice}</b></a>
                    </p>

                    <p class="delivery" id="time">
                        Versanddauer: <a id="del_time_id"><b>{$deltime}</b></a>
                    </p>
                </td>
            </tr>
        </table>



        <input type="submit" id="information" value="Informationen" class="switch" onclick="switchdi('des', 'inf', 'information', 'description')"></input>
        <input type="submit" id="description" value="Beschreibung" class="switch" onclick="switchid('inf', 'des', 'description', 'information')"></input>
        <div id="inf">
            <table>
                <tr>
                    <td>
                        <p><b>Titel:</b> {$title}</p>
                        <p><b>Produktart:</b> {$producttype}</p>
                        <p><b>Hersteller:</b> {$producer}</p>
                    </td>
                    <td>
                        <p><b>Kategorie:</b> {$category}</p>
                        <p><b>Artikelzustand:</b> {$condition}</p>
                        <p><b>Modell:</b> {$model}</p>
                    </td>
                </tr>
            </table>
        </div>

        <div id="des">
            <table><tr><td>{$description}</td></tr></table>
        </div>

    </div>

    <!-- Edit form; only for seller; default hided; can be activated with javascript through pressing belonging button  -->
    {if $seller_is_user}
    <div id="edit_main">
        <form method="post" id="edit_auction" name="edit_auction" action="../../php/edit.php" onsubmit="return control()">
            <input type="hidden" id="artid" name="artid" value={$article_id}/>

            <h3>
                <input type="text" name="title" id="title" value={$title}/>
            </h3>
            <table>
                <tr>
                    <td class="pic">
                       <div id="myCarousel" class="carousel slide" data-ride="carousel">					  <!-- Indicators -->					  <ol class="carousel-indicators">					  {for $n=0 to $img_amount-1}						<li data-target="#myCarousel" data-slide-to="{$n}" {if $n==0}class="active"{/if}></li>					  {/for}					  </ol>					  <!-- Wrapper for slides -->					  <div class="carousel-inner">					  {for $i=0 to $img_amount-1}						<div class="item{if $i==0} active{/if}">						  <img src='../main/img.php?artid={$article_id}&id={$i}' id="big">						</div>					  {/for}					  <!-- Left and right controls -->					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">						<span class="glyphicon glyphicon-chevron-left"></span>						<span class="sr-only">Previous</span>					  </a>					  <a class="right carousel-control" href="#myCarousel" data-slide="next">						<span class="glyphicon glyphicon-chevron-right"></span>						<span class="sr-only">Next</span>					  </a>					</div>
                    </td>
                    <div class="pre">
                    </div>
                    </td>
                    <td class="text">

                        <h2>
                            <input type="text" name="producer" id="producer" value="{$producer}"/>
                            <input type="text" name="model" id="model" value="{$model}"/>
                        </h2>

                        <p class="price">
                            Preis: <input type="number" step="0.01" name="price" id="price" value="{$price}"/>
                        </p>


                        <p class="seller">Verkäufer: {$seller}</p>


                        <p class="cre_date">Erstellt: <b>{$cre_date} - {$cre_time}</b></p>


                        <p class="delivery" id="costs">
                            Versandkosten: <input type="number" step="0.01" name="delivery_costs" id="delivery_costs" value="{$delprice}">
                        </p>

                        <p class="delivery" id="time">
                            Versanddauer: <input type="text" name="delivery_time" id="delivery_time" value="{$deltime}"/>
                        </p>
                    </td>
                </tr>
            </table>

            <div id="des_edit">
                <h2>Beschreibung</h2>
                <textarea name="description_e" id="description_e" class="description" rows="20">{$description|replace:'<br />':''}</textarea>
            </div>


            <input type="submit" id="change" name="change" value="Änderung speichern"/>

        </form>
    </div>
    {/if}

    <object height="0px"></object>

</div>

<div id="footer">

</div>

</div>
</body>
</html>