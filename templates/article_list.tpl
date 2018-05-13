<html>

<head>
    {include file='head.tpl'}

    <link rel="stylesheet" type="text/css" href="../../css/preview.css">
    <link rel="stylesheet" type="text/css" href="../../css/sort.css">
</head>

{include file='header.tpl' login=$login username=$username credit=$credit}

<div id="main">
    {if $link_to_sort!=null}
        <ul>
            <li><a>Sortieren nach</a>
                <ul id="sort">
                    <li id="a_u">
                        <a href="{$link_to_sort}sort=articleid&order=ASC">
                            Datum <img src="../../img/up.png">
                        </a></li>
                    <li id="a_d">
                        <a href="{$link_to_sort}sort=articleid&order=DESC">
                            Datum <img src="../../img/down.png">
                        </a></li>
                    <li id="b_u">
                        <a href="{$link_to_sort}sort=price&order=ASC">
                            Preis <img src="../../img/up.png">
                        </a></li>
                    <li id="b_d">
                        <a href="{$link_to_sort}sort=price&order=DESC">
                            Preis <img src="../../img/down.png">
                        </a></li>
                    <li id="c_u">
                        <a href="{$link_to_sort}sort=title&order=ASC">
                            Titel <img src="../../img/up.png">
                        </a></li>
                    <li id="c_d">
                        <a href="{$link_to_sort}sort=title&order=DESC">
                            Titel <img src="../../img/down.png">
                        </a></li>
                </ul></li>
        </ul>
    {/if}

    <h3>{$page_title}</h3>
        {for $n=1 to $amount}
            <form name="load_article" class="preview" action="../view/main/auction.php" method="get">
                <div id="preview" onClick="location.href='../main/auction.php?artid={$id[$n]}'">
                    <div id="img">
                        <img src="../main/img.php?artid={$id[$n]}&id=0">
                    </div>
                    <p><h2>{$title[$n]}</h2></p>
                    <p class="condition">{$condition[$n]}&nbsp;</p>
                    <p><h1>{$price[$n]} €</h1></p>
                    <p class="subtext"><b>+ {$delprice[$n]} € Versand</b></p>
                    <p class="subtext">{$deltime[$n]} Werktage</p>
                </div>
            </form>
        {/for}
</div>

<div id="footer">

</div>

</div>
</body>
</html>