<!DOCTYPE HTML>
<html lang="nl" class="no-webp">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alarm systeem</title>
<?php wp_head();?>
</head>

<!--Mobiele header-->

<div class="viewport">
    <header class="header" role="banner">

        <nav id="nav" class="nav" role="navigation">

            <!-- ACTUAL NAVIGATION MENU -->
            <ul class="nav__menu" id="menu" tabindex="-1" aria-label="main navigation" hidden>
                <li class="nav__item"><a href="#" class="nav__link"><img src="<?php echo get_template_directory_uri() ?>/images/pandora-alarm.png"></a></li>
                <br><br><br><br>
                <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Producten</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Over ons</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Vergelijk</a></li>

            </ul>

            <!-- MENU TOGGLE BUTTON -->
            <a href="#nav" class="nav__toggle" role="button" aria-expanded="false" aria-controls="menu">
                <svg class="menuicon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                    <title>Toggle Menu</title>
                    <g>
                        <line class="menuicon__bar" x1="13" y1="16.5" x2="37" y2="16.5"/>
                        <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/>
                        <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/>
                        <line class="menuicon__bar" x1="13" y1="32.5" x2="37" y2="32.5"/>
                        <circle class="menuicon__circle" r="23" cx="25" cy="25" />
                    </g>
                </svg>
            </a>

            <!-- ANIMATED BACKGROUND ELEMENT -->
            <div class="splash"></div>

        </nav>

    </header>

</main>
</div>




    <?php
/*
   Menu voor de top rij ! Niet meer aanzitten
*/
?>

<div id="websiteholder">
<div id="websitecontent">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</a></div></div></div></div></div>

<div id="desktopheader" class="staticmenu">
<div class="scale clearfix">
<nav class="nawdatamenu headernaw">
<ul class="nawmenu nawensocialmenu">

<li>
<a href="/faq" title="Veelgestelde vragen">
<i class="fas fa-unlock-alt"></i>
<span>F.A.Q.</span>
</a></li>

<li>
<a href="/error" title="Algemene voorwaarden">
<i class="fas fa-unlock-alt"></i>
<span>Voorwaarden</span>
</a></li>

<li>
<a class="naw-email" href="/error" title="Contact">
<i class="fas fa-unlock-alt"></i>
<span>Contact</span>
</a></li>

</ul></nav></div></div>

<?php
/*
   Menu voor de top rij ! Moet nog gedaan worden
*/
?>
<div id="TopContentInfo" class="topcontent">
<div class="scale clearfix">
<div itemscope id="logo" class="topcontenttab headleft">
<a href="/home" title="Home">
<img itemprop="logo" src="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-wit%20(1).png" alt="Pandora Car Alarm Benelux | Logo">
</a></div>




    <ul class="hoofdmenumetsub hoofdmenuul">

        <li><a href="/home" title="Home">Home</a></li>
        <li><a href="/shop" title="Producten">Producten</a></li>
<!--        <li><a href="/dealers" title="Montage partners">Montage Partners</a></li>-->
        <li><a href="/over" title="Over Pandora">Over ons</a></li>
        <li><a href="/products-compare" title="Vergelijk">Vergelijk</a></li>
        <li><a href="/products-compare" title="Vergelijk"><span id="total">0</span></a></li>


    </ul>

</div></div>

<?php
/*
    Menu voor alle soorten producten ! Niet meer aanzitten
 */
?>

<div id="TopContentShopInfo" class="topcontent">
<div class="scale clearfix">
<div class="topcontenttab headleft">
<div class="shopmenuwrapper">
<div class="shopmenuholder">
<ul class="Shop01Menu">

<li class="shopmenutoplevelli ">
<a href="/product-category/auto/" title="Auto">Auto</a>
<div class="Shop01Menusubmenu">
<div class="menuholdercategorie">
</a></div></div></li>

<li class="shopmenutoplevelli ">
<a href="/product-category/bedrijfswagen/" title="Bedrijfswagen">Bedrijfswagen</a>
<div class="Shop01Menusubmenu">
<div class="menuholdercategorie">
</a></div></div></li>

<li class="shopmenutoplevelli ">
<a href="/product-category/motorfiets/" title="Motorfiets">Motorfiets</a>
<div class="Shop01Menusubmenu">
<div class="menuholdercategorie">
</a></div></div></li>

<li class="shopmenutoplevelli ">
<a href="/product-category/camper/" title="Camper">Camper</a>
<div class="Shop01Menusubmenu">
<div class="menuholdercategorie">
</a></div></div></li>

<li class="shopmenutoplevelli ">
<a href="/product-category/accessoires/" title="Accessoires">Accessoires</a>
<div class="Shop01Menusubmenu">
<div class="menuholdercategorie">
</a></div></div></li>

</ul></div></div></div></div></div>

</div></div></div></div></div></div></div>

</header>
</html>