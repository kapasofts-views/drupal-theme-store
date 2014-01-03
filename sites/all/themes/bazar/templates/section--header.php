<!-- START TOP BAR -->
<div id="topbar" class="hidden-phone">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div id="topbar-left"></div>
                <div id="topbar-right">
                    <?php if($header_tapi['is_authenticated']) : ?>
                        <?php print '<div class="widget"><a href="/' . $header_tapi['profile']['url'] . '">' . $header_tapi['profile']['text'] . '</a></div>';?>
                    <?php endif; ?>
                    <?php print '<div class="widget"><a href="/' . $header_tapi['login']['url'] . '">' . $header_tapi['login']['text'] . '</a></div>';?>
                    <div class="hide-topbar " style="display: inline;">
                        <div id="icl_lang_sel_widget" class="widget-1 widget-first widget icl_languages_selector"><div id="lang_sel"  >
                                <ul>
                                    <li><a href="#" class="lang_sel_sel icl-en">
                                            English</a>
                                        <ul>
                                            <li class="icl-it">
                                                <a rel="alternate" hreflang="it" href="#">
                                                    Spanish
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </div>
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

                <?php
                if(empty($region['cart_in_header'])){
                    $bazar_cart = array();
                    $bazar_cart['total-price'] = 0;
                    $bazar_cart['total-price-cents'] = '00';
                    $bazar_cart['is-empty'] = true;
                    $bazar_cart['total-qty'] = 0;
                    print theme_render_template(path_to_theme().'/templates/block--cart-in-header.tpl.php', $bazar_cart);
                }else{
                    print render($region['cart_in_header']);
                }

                ?>
            </div>
        </div>	<!-- START HEADER SIDEBAR -->
        <div id="header-sidebar" class="group hidden-phone">
            <div id="text-image-2" class="widget-1 widget-first widget text-image">
                <div class="text-image head-chat-icon" style="text-align:left">
                    <?php //echo '<img src="'.base_path().path_to_theme().'/img/premium-themes-chat.png" alt="buy web designs" width="36" height="43" />';?>
                </div>
                <h3>CHAT WITH US</h3>
                <p>CURRENTLY OFFLINE</p>
            </div>
            <div id="text-image-3" class="widget-2 widget text-image">
                <div class="text-image head-phone-icon" style="text-align:left">
                    <?php //echo '<img src="'.base_path().path_to_theme().'/img/best-website-theme.png" alt="professional design templates" width="16" height="43" />';?>
                </div>
                <h3>CUSTOMER SUPPORT</h3>
                <p>+ 1 (442) 777-3797</p>
            </div>
            <div id="text-2" class="widget-3 widget-last widget widget_text">
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
            print '<li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page '.$menu_selector['front'].' "><a href="/best-drupal-themes">HOME</a></li>';
            print '<li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page '.$menu_selector['all_designs'].' "><a href="/drupal-responsive-theme">DESIGN THEMES</a>';
           ?>
            <ul class="sub-menu">
                <li id="menu-item-694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-children-0"><a href="/drupal-business-theme-corporate-clean">BUSINESS - CORPORATE</a></li>
                <li id="menu-item-693" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-children-0"><a href="/drupal-commerce-themes-ecommerce-themes">COMMERCE - RETAIL</a></li>
               <li id="menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-children-0"><a href="/drupal-admin-theme">ADMIN - HOSTING</a></li>
                <li id="menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-children-0"><a href="/drupal-magazine-theme">MAGAZINE - NEWS</a></li>
                <li id="menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-children-0"><a href="/hotel-templates-bed-and-breakfast-website-design">HOTEL - BED & BREAKFAST</a></li>
                <li id="menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-children-0"><a href="/drupal-landing-page">LANDING PAGE</a></li>
                <li id="menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-children-0"><a href="/drupal-blog-themes">PERSONAL - CREATIVE</a></li>
            </ul>
            <?php print '</li>';
            print '<li id="menu-item-579" class="menu-item menu-item-type-custom menu-item-object-custom '.$menu_selector['all_widgets'].' "><a href="/web-widgets-for-sale">WIDGETS</a></li>';
            print '<li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page '.$menu_selector['contact'].' "><a href="/drupal-themes-contact-us">CONTACT</a></li>';
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