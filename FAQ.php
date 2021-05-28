<?php
/*
* Template name: FAQ
*/
?>

<?php get_header();?>

<div id="contentholder">
    <a id="content"></a>
    <div class="scale clearfix">
        <section id="inhoud">
            <div id="inhoudsfullwrapper">
                <article class="accordionholder">
                    <div class="accordionintro" itemscope itemtype="http://schema.org/Article">
                        <div itemprop="articleBody"><h1>Meest gestelde vragen</h1></div>
                        <div class="schemaorginfo" itemscope itemprop="image" itemtype="https://schema.org/ImageObject"></div>
                        <div class="schemaorginfo">
                            <p itemscope itemprop="author" itemtype="http://schema.org/Person" class="author">Geplaats door <span itemprop="name">Pandora Car Alarm Benelux</span></p>
                            <div itemscope itemprop="publisher" itemtype="http://schema.org/Organization" class="publisher"></div></div>
                        <div id="accordion-39" class="st-accordion">
                            <ul id="accordionul-39"><li>

                                <?php if(have_rows('vragen')):?>

                                    <a href="#" id="faq-2">

                                        <span class="faqtitle">Zijn de Pandora systemen te gebruiken met de nieuwste auto's?</span>
                                        <i
                                            class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a><div
                                        class="st-content" itemscope itemtype="http://schema.org/Article" style="display ;"><h3 class="schemaorginfo" itemprop="headline mainEntityOfPage">Zijn de Pandora systemen te gebruiken met de nieuwste auto's?</h3>
                                        <div class="st-content-textholder" itemprop="articleBody"><p>Al onze Pandora systemen gebruiken technologie van de laatste generatie. Ze&nbsp;kunnen dus gebruikt worden met de meeste nieuwe modellen auto&#39;s.</p></div></div></li>


                                <?php while(have_rows('vragen')): the_row() ?>






                                <?php endwhile;?>
                                <?php endif;?>


                               </ul></div></article></div></div></section></div></div></div></div>

</div></div></div></div></div></body></html>

<?php get_footer();?>