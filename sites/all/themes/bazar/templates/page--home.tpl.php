
 <!--BEGIN #slider-->
<div id="slider-elastic-0" class="slider slider-elastic elastic ei-slider container" style="">
    <div class="ei-slider-loading">Loading</div>
    <ul class="ei-slider-large">


        <li class="first slide-1 slide align-">
            <?php print '<img width="1173" height="339" src="'.base_path().path_to_theme() .'/img/slider/paid-drupal-themes.jpg" class="attachment-full" alt="drupal paid themes" />';?>

        </li>

        <li class="slide-2 slide align-">
            <?php echo '<img width="1170" height="339" src="'.base_path().path_to_theme() .'/img/slider/buy-drupal-theme.jpg" class="attachment-full" alt="buy drupal template" />';?>

        </li>

        <li class="last slide-3 slide align-">
            <?php echo '<img width="1173" height="339" src="'.base_path().path_to_theme() .'/img/slider/top-drupal-themes.jpg" class="attachment-full" alt="premium drupal themes" />';?>

        </li>

    </ul>
    <ul class="ei-slider-thumbs">
        <li class="ei-slider-element">Current</li>
        <?php echo '<li><a href="#"> - </a><img src="'.base_path().path_to_theme() .'/img/slider/premium-drupal-7-themes.jpg" alt="top drupal themes" /></li>';?>
        <?php echo '<li><a href="#"> - </a><img src="'.base_path().path_to_theme() .'/img/slider/best-drupal-theme.jpg" alt="premium drupal themes" /></li>';?>
        <?php echo '<li><a href="#"> - </a><img src="'.base_path().path_to_theme() .'/img/slider/drupal-themes.jpg" alt="best drupal themes" /></li>';?>
    </ul>

    <div class="shadow"></div>
</div>
<!-- ei-slider
 END #slider -->

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#slider-elastic-0.elastic').eislideshow({
            easing		: 'easeOutExpo',
            titleeasing	: 'easeOutExpo',
            titlespeed	: 1200,
            autoplay	: true,
            slideshow_interval : 3000,
            speed       : 800,
            animation   : 'sides'
            // 		slidesLoaded: function() {
            //                    $('.ei-slider .ei-slider-loading').hide();
            //              }
        });
    });
</script>  <!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
<div class="container group">
<div class="row">
<!-- START CONTENT -->
<div id="content-page" class="span9 content group">
<div id="post-696" class="post-696 page type-page status-publish hentry group instock">
    <div class="products-slider-wrapper">
        <div class="products-slider" data-items="3">
            <h4>DESIGN THEMES</h4>
            <?php
            print render($page['template_designs']);
            ?>
            <div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="clear"></div>
<div class="es-carousel-clear"></div>
<div id="post-696" class="post-696 page type-page status-publish hentry group instock">
    <div class="products-slider-wrapper">
        <div class="products-slider" data-items="3">
            <h4>WIDGETS</h4>
            <?php
            print render($page['widgets']);
            ?>
            <div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="es-carousel-clear"></div>
<p>&nbsp;</p>
</div>



<!-- START SIDEBAR -->
<div id="sidebar-homeiv" class="span3 sidebar group">
    <?php print render($page['sidebar_main']); ?>
</div>
<!-- END SIDEBAR -->



<!-- START EXTRA CONTENT -->
<div class="extra-content margin-top group span12"><h2 style="text-align: center;">OUR HAPPY CUSTOMERS :)</h2>

    <div class="testimonials-flexslider">
        <ul class="slides">
            <li>
                <blockquote><p><a href="#">[DesignsSquare] surprising sense of taste who can take notions such as "noise and photographic textures" and "deep colour with contrasts" and come up with a firm starting place for a website. Changing minute details in the site is never a problem.</a></p></blockquote>
                <p class="meta"><strong><a href="#" class="name">Melissa Cathcart, L.Ac.</a></strong>  - <a href="#">Barefoot Doctor Community Healthcare</a></p>
            </li>


            <li>
                <blockquote><p><a href="#">[DesignsSquare] design met all of our visual needs, was easy to maintain, and could be easily modified or changed by our people.[...] everyone now points to our site with pride.                        </a></p></blockquote>
                <p class="meta"><strong><a href="#" class="name">Gerold Luss, President of Church Board</a></strong>  - <a href="#">Lat. Ev. Lutheran Church of Minneapolis & St. Paul </a></p>
            </li>

            <li>
                <blockquote><p><a href="#">[DesignsSquare] creative designs were so much better than the templates out there we used before. We wanted our new website to look class of its own and now it does. Thank you </a></p></blockquote>
                <p class="meta"><strong><a href="http://lta-insurance.com/" class="name">Lawrence Tan</a></strong>  - <a href="http://lta-insurance.com/">LTA Insurance</a></p>
            </li>
        </ul>
        <div class="prev"></div>
        <div class="next"></div>
    </div>
    <script type="text/javascript">
        jQuery(function($){
            var animation = $.browser.msie || $.browser.opera ? 'fade' : 'slide';
            $('.testimonials-flexslider').flexslider({
                animation : animation,
                slideshowSpeed: 5000,
                animationSpeed: 500,
                touch: false,
                controlNav: false,
                directionNav: true
            });
        });
    </script>
</div>
<!-- END EXTRA CONTENT -->
</div>



</div>