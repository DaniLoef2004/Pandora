<?php get_header();?>

<body>

<script></script>

<!--
*   De slider direct onder de header.
*   Hij vereist de afbeeldingen op zijn tijd te kunnen veranderen.
-->



<?php

$slider = get_field('slider');

$image1 = get_field('slider_afbeelding_3');
$image2 = get_field('slider_afbeelding_2');
$image3 = get_field('slider_afbeelding_3');

?>

<div class="slideshow-container">

    <div class="mySlides fade slider">
        <img class="slider_image" src="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-slide%20(1).jpg" alt="" style="width:100%">
    </div>
    <div class="mySlides fade slider">
        <img class="slider_image" src="<?php echo get_template_directory_uri() ?>/images/pandora-dealers.jpg" alt="" style="width:100%">
    </div>

    <div class="mySlides fade slider">
        <img class="slider_image" src="<?php echo get_template_directory_uri() ?>/images/pandora-thief.jpg" alt="" style="width:100%">
    </div>

</div>

<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000);
    }

</script>

<!--
 *  Het "In de spotlights kopje"
 *  Afbeelding moet door hem veranderd kunnen worden
 *  Tekst hoeft niet veranderd te worden, maar zou een mooie extra zijn.
-->

<?php $spotlight = get_field('spotlights')?>

<div <a id="content"></a> <div class="scale clearfix">
                <section
        <div id="inhoudsfullwrapper"></div>
        <div class="codesnippetsholder clearfix"></div>
        <div id="artikelhighlightswrapper">
            <div class="titlewrapper">
                <div class="scale clearfix">
                    <div class="titletxtbg">
                        <h2> In de spotlights </h2>
                    </div></div></div>
            <div class="scale clearfix">
                <div class="spotlightswrapper">
                    <div class="spotlightsleft">
                        <div id="highlightshopholder" class="clearfix" itemscope itemtype="http://schema.org/Product">
                            <div class="Shop01outerArtWrapper">
                                <a
                                        onclick="ECommerce.onProductClick(this.href, 0, 'highlights');" itemprop="url" href="<?php echo $spotlight['product_link'];?>" title=""><div
                                            class="Shop01artThumbImage"><div
                                                class="Shop01arthover"><div
                                                    class="meerinfoblok">Meer info</div></div><div
                                                class="stretchMe" data-stretch="<?php echo get_template_directory_uri() ?>/images/Mini%2520v3%2520box.jpg.jpg" data-title="Auto - Mini%20v3%20box"><div
                                                    class="anystretch"><picture>
                                                    <img
                                                            src="<?php echo get_template_directory_uri() ?>/images/Mini%2520v3%2520box.jpg" data-title="Auto - Mini%20v3%20box" title="Auto - Mini%20v3%20box" class="" ></picture></div></div></div>
                                </a><div
                                        class="Shop01innerArtTxtHolder">
                                    <a
                                            onclick="ECommerce.onProductClick(this.href, 0, 'highlights');" href="/assortiment/artikel/100.2/pandora-mini.html" title=""><h4 class="innerArtTitel" itemprop="category name">
                                            <?php echo $spotlight['product_naam'];?></h4><p
                                                class="innerArtExtra" itemprop="description"><?php echo $spotlight['product_beschrijving'];?></p>
                                    </a></div></div><div
         </div></div></div> <script>ECommerce.articles['highlights'] = [{"id":"100.2","name":,"category":"Auto","price":699,"brand":"","variant":"","key":1,"amount":1},{"id":"100.3","name":"Pandora Light Pro v2","category":"Auto","price":0,"brand":"","variant":"","key":2,"amount":1},{"id":"100.7","name":"Pandora Camper","category":"Camper ","price":1650,"brand":"","variant":"","key":3,"amount":1},{"id":"100.9","name":"Pandora Smart Moto","category":"Motorfiets","price":0,"brand":"","variant":"","key":4,"amount":1},{"id":"100.4","name":"Pandora Smart Pro","category":"Auto","price":0,"brand":"","variant":"","key":5,"amount":1},{"id":"6","name":"Pandora MOTO EU","category":"Motorfiets","price":0,"brand":"","variant":"","key":6,"amount":1},{"id":"100.1","name":"Pandora IMMO","category":"Auto","price":0,"brand":"","variant":"","key":7,"amount":1},{"id":"","name":"Pandora Elite","category":"Auto","price":0,"brand":"","variant":"","key":8,"amount":1}];
                            ECommerce.lists['highlights'] = 'Highlights';
                            ECommerce.createImpressions('highlights');</script> </div><div
                            class="spotlightsright"><div
                                class="artikelvoordelen"><div
                                    class="content-editable editable-dyna-content" data-compid="48" id="content48-part0" itemscope itemtype="http://schema.org/Article"><div
                                        class="schemaorginfo" itemprop="headline mainEntityOfPage">Tekst - Voordelen tick box</div><div
                                        itemprop="articleBody"><h2>Zoek uw Pandora alarm</h2><p>De voordelen van een Pandora alarm</p><ul><li>Beveiligd tegen diefstal</li><li>U kunt altijd zien waar uw auto is</li></ul><p><a
                                                class="meerinfoblok" href="/assortiment.html">Bekijk assortiment</a></p></div><div
                                        class="schemaorginfo" itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                    <img
                                            itemprop="image" src="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-zwart.png" alt="Pandora Car Alarm Benelux logo"><meta
                                            itemprop="url" content="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-zwart.png"><meta
                                            itemprop="width" content="600"><meta
                                            itemprop="height" content="80"></div><div
                                        class="schemaorginfo"><p
                                            itemscope itemprop="author" itemtype="http://schema.org/Person" class="author">Geplaats door <span
                                                itemprop="name"></span></p><div
                                            itemscope itemprop="publisher" itemtype="http://schema.org/Organization" class="publisher">
<span
        itemprop="name"></span><div
                                                itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><meta
                                                    itemprop="url" content="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-zwart.png"></div></div><meta
                                            itemprop="datePublished" content="09-07-2020"><meta
                                            itemprop="dateModified" content="09-07-2020"></div></div></div></div></div></div>

<!--
    * De montage partners.
    * Voor nu nog niet van belang, maar moet later door hem geactiveerd kunnen worden.
    * Via een true false statement moet hij deze kunnen laten weergeven wanneer nodig.
-->






<span itemprop="name"></span><div
                                        itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><meta
                                            itemprop="url" content="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-zwart.png"></div></div><meta
                                    itemprop="datePublished" content="04-12-2019"><meta
                                    itemprop="dateModified" content="04-12-2019"></div></div></div></div><div
                id="categorieenhighlightswrapper"><div
                    class="titlewrapper"><div
                        class="scale clearfix"><div
                            class="titletxtbg"><h2>Montage Partners</h2></div></div></div></div><div
                id="searchdealerwrapper"><div
                    class="searchdealerbg"><div
                        class="searchdealercontent"><div
                            class="scale clearfix">
                        <img
                                class="searchdealerlock" src="<?php echo get_template_directory_uri() ?>/images/lock-icon.svg" alt="Lock"><div
                                class="content-editable editable-dyna-content" data-compid="31" id="content31-part0" itemscope itemtype="http://schema.org/Article"><div
                                    class="schemaorginfo" itemprop="headline mainEntityOfPage">Tekst-dealerszoeken</div><div
                                    itemprop="articleBody"><p>Op zoek naar een dealer voor Pandora?</p><p>Bekijk waar bij u in de buurt Pandora verkrijgbaar is</p></div><div
                                    class="schemaorginfo" itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                <img
                                        itemprop="image" src="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-zwart.png" alt="Pandora Car Alarm Benelux logo"><meta
                                        itemprop="url" content="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-zwart.png"><meta
                                        itemprop="width" content="600"><meta
                                        itemprop="height" content="80"></div><div
                                    class="schemaorginfo"><p
                                        itemscope itemprop="author" itemtype="http://schema.org/Person" class="author">Geplaats door <span
                                            itemprop="name">Pandora Car Alarm Benelux</span></p><div
                                        itemscope itemprop="publisher" itemtype="http://schema.org/Organization" class="publisher">
<span
        itemprop="name">Pandora Car Alarm Benelux</span><div
                                            itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><meta
                                                itemprop="url" content="<?php echo get_template_directory_uri() ?>/images/pandora-alarm-zwart.png"></div></div><meta
                                        itemprop="datePublished" content="04-12-2019"><meta
                                        itemprop="dateModified" content="05-12-2019"></div></div><a
                                href="/dealers.html" class="meerinfoblok"><i
                                    class="fa fa-search"></i> Zoek een dealer</a></div></div></div></div>






}



<br><br><br>



<?php get_footer();?>

</body></html>
