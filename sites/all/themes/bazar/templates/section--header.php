<!-- START TOP BAR -->
<div id="topbar" class="hidden-phone">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div id="topbar-left"></div>
                <div id="topbar-right">

                    <div class="topbar_login widget ">
                        <a href="/user">Login <span> / </span> Register</a></div>


                    <div class="hide-topbar " style="display: inline;">
                        <div id="icl_lang_sel_widget" class="widget-1 widget-first widget icl_languages_selector"><div id="lang_sel"  >
                                <ul>
                                    <li><a href="#" class="lang_sel_sel icl-en">
                                            English</a>
                                        <ul>
                                            <li class="icl-it">
                                                <a rel="alternate" hreflang="it" href="#">
                                                    Spanish                    </a>
                                            </li>
                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </div>
<!--                        <div id="nav_menu-2" class="widget-2 widget-last widget widget_nav_menu">-->
<!--                            <div class="menu-top-menu-container">-->
<!--                                <ul id="menu-top-menu" class="menu">-->
<!--                                    <li id="menu-item-577" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-577"><a href="http://demo.yithemes.com/bazar/wishlist/">MY WISHLIST</a></li>-->
<!--                                    <li id="menu-item-1747" class="yith-woocompare-open menu-item menu-item-type-custom menu-item-object-custom menu-item-1747"><a href="#">COMPARE</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="border"></div>
        <div class="border"></div>
        <div class="border"></div>
        <div class="border borderstrong"></div>
    </div>
</div>


<script>
    jQuery(function($){
        var twitterSlider = function(){
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
            twitterSlider();
        });
    });
</script>

<!-- END TOP BAR -->
<!-- START HEADER -->
<div id="header" class="group margin-bottom">

<div class="group container">

    <div class="row" id="logo-headersidebar-container">

        <!-- START LOGO -->
        <div id="logo" class="group">
            <a id="textual" href="/" title="Design Square">
                Designs <span class="title-highlight">Square</span></a>

            <p id='tagline'>Inspiration Designs. Practical Widgets</p>
        </div>
        <!-- END LOGO -->
        <div id="header-cart-search">
            <div class="cart-row group">

<!--                <form action="http://demo.yithemes.com/bazar/" method="get" class="search_mini">-->
<!--                    <input type="text" name="s" id="search_mini" value="" placeholder="search for products" />-->
<!--                    <input type="hidden" name="post_type" value="product" />-->
<!--                    <input type="submit" value="" id="mini-search-submit" />-->
<!--                </form>-->
                <?php
                if(empty($region['cart_in_header'])){
                    $bazar_cart = array();
                    $bazar_cart['total-price'] = 0;
                    $bazar_cart['total-price-cents'] = '00';
                    $bazar_cart['is-empty'] = true;
                    $bazar_cart['total-qty'] = 0;
                    //$vars['bazar_cart'] = $bazar_cart;
                    print theme_render_template(path_to_theme().'/templates/block--cart-in-header.tpl.php', $bazar_cart);
                }else{
                    print render($region['cart_in_header']);
                }

                ?>
                <?php //print drupal_render(drupal_get_form('search_block_form'));?>
            </div>
        </div>	<!-- START HEADER SIDEBAR -->
        <div id="header-sidebar" class="group hidden-phone">
            <div id="text-image-2" class="widget-1 widget-first widget text-image"><div class="text-image" style="text-align:left">
                    <?php echo '<img src="'.base_path().path_to_theme().'/img/chat-widget-img3.png" alt="" width="36" height="43" />';?>
                </div>
                <h3>CHAT WITH US</h3>
                <p>CURRENTLY OFFLINE</p></div><div id="text-image-3" class="widget-2 widget text-image">
                <div class="text-image" style="text-align:left">
                    <?php echo '<img src="'.base_path().path_to_theme().'/img/widget221.png" alt="" width="16" height="43" />';?>
                </div>
                <h3>CUSTOMER SUPPORT</h3>
                <p>+ 1 651 3346333</p></div><div id="text-2" class="widget-3 widget-last widget widget_text">
                <div class="textwidget">LOVE IS SHARING &nbsp; &nbsp; &nbsp;
                    <div class="socials-default-small facebook-small default">
                        <a href="# " class="socials-default-small default facebook" >facebook</a>
                    </div>

                    <div class="socials-default-small rss-small default">
                        <a href="#" class="socials-default-small default rss" >rss</a>
                    </div>

                    <div class="socials-default-small twitter-small default">
                        <a href="#" class="socials-default-small default twitter" >twitter</a>
                    </div>

                    <div class="socials-default-small google-small default">
                        <a href="#" class="socials-default-small default google" >google</a>
                    </div>

                    <div class="socials-default-small linkedin-small default">
                        <a href="#" class="socials-default-small default linkedin" >linkedin</a>
                    </div>

                    <div class="socials-default-small pinterest-small default">
                        <a href="#" class="socials-default-small default pinterest" >pinterest</a>
                    </div>
                </div>
            </div>	</div>

    </div>
</div>

<div id="nav">
    <div class="container">

        <ul id="menu-menu" class="level-1">
            <?php
            print '<li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page '.$menu_selector['front'].' "><a href="/">HOME</a></li>';
            print '<li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page '.$menu_selector['all_designs'].' "><a href="/drupal-templates-for-sale">DESIGN THEMES</a></li>';
            print '<li id="menu-item-579" class="menu-item menu-item-type-custom menu-item-object-custom '.$menu_selector['all_widgets'].' "><a href="/web-widgets-for-sale">WIDGETS</a></li>';
            print '<li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page '.$menu_selector['contact'].' "><a href="/contact-us">CONTACT</a></li>';
?>
        </ul>
    </div>
    <div class="border borderstrong borderpadding container"></div>
    <div class="border container"></div>
    <div class="border container"></div>
    <div class="border container"></div>
</div>

</div>
<!-- END HEADER -->