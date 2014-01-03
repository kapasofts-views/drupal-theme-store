 <!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
<div class="container group">
<div class="row">
<!-- START CONTENT -->
<div id="content-page" class="span9 content group">

    <?php print render($page['page_headline']); ?>

    <?php print render($title_prefix); ?>

    <div class="slogan">
        <h2><?php print $basic_tapi['title']; ?></h2>
        <?php print '<h3>'.$basic_tapi['slogan'].'</h3>';?>
        <div class="border margin-top"></div>
        <div class="border"></div>
        <div class="border"></div>
    </div>

    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print '<p>' . $basic_tapi['checkout_message' ] . '</p>';?>
    <?php print render($page['content']); ?>
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