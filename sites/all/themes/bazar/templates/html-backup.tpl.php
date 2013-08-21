<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<![endif]-->

<!-- This doesn't work but i prefer to leave it here... maybe in the future the MS will support it... i hope... -->
<!--[if IE 10]>
<html id="ie10"  class="ie"lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<![endif]-->

<!--[if gt IE 9]>
<html class="ie"lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<![endif]-->

<![if !IE]>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<![endif]>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
  <meta property="og:site_name" content="Bazar [SHOP]"/>
  <meta property="og:title" content="Home IV"/>
  <meta property="og:url" content="http://demo.yithemes.com/bazar/home/home-iv/"/>
  <meta name="description" content="Unpaid Payment, Bounced Check, Unpaid Salary, Not Paying Rent EFFECTIVE WAY GET MONEY BACK!"/>
  <meta name="keywords" content="money get back, overdue payments, bad check laws, get my money back, bounced check, how to get money back from a friend, can i get my money back, how to get your money back, overdue invoice, rent collect, bad check, collecting rent, tenant failure to pay rent"/>
    <?php print $head; ?>
  <script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
  <title>Drupal Store</title>
   <script language="javascript">
        var yit_responsive_menu_type = "arrow";
        var yit_responsive_menu_text = "NAVIGATE TO...";
    </script>
    <!-- For iPad3 with retina display: -->
    <?php print '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'. base_path().path_to_theme() .'/img/apple-touch-icon-144x.png" />';?>
    <!-- For first- and second-generation iPad: -->
    <?php print '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'. base_path().path_to_theme() .'/img/apple-touch-icon-114x.png" />';?>
    <!-- For first- and second-generation iPad: -->
    <?php print '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'. base_path().path_to_theme() .'/img/apple-touch-icon-72x.png">';?>
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <?php print '<link rel="apple-touch-icon-precomposed" href="'. base_path().path_to_theme() .'/img/apple-touch-icon-57x.png" />';?>
    <?php print "<link rel='stylesheet' id='reset-bootstrap'  href='".base_path().path_to_theme()."/css/reset-bootstrap.css' type='text/css' media='all' />"."\n";?>
    <?php print $styles; ?>

    <style>.yith-wcwl-add-button > a.button.alt{background:#4F4F4F;color:#FFFFFF;border-color:#4F4F4F;}.wishlist_table a.add_to_cart.button.alt{background:#4F4F4F;color:#FFFFFF;border-color:#4F4F4F;}.wishlist_table{background:#FFFFFF;color:#676868;border-color:#676868;}</style>
   <?php foreach($bazarCssClass as $key => $css_class){
        if($css_class['external']){
            print "<link rel='stylesheet' id='".$key."'  href='".$css_class['url']."' type='text/css' media='all' />"."\n";
        }else{
            print "<link rel='stylesheet' id='".$key."'  href='". base_path().path_to_theme() .$css_class['url']."' type='text/css' media='all' />"."\n";
        }
    }?>

    <?php print $scripts; ?>

    <?php foreach($bazarJsClass as $key => $js_class){
        if($js_class['external']){
            echo '<script src="'.$js_class['url'].'"></script>';
        }else{
            echo '<script src="'.base_path().path_to_theme().$js_class['url'].'"></script>'."\n";
        }
    }?>


    <script type="text/javascript">var icl_lang = 'en';var icl_home = 'http://com.com/';</script>
    <style type="text/css">
        body { background-color: #ffffff; }
    </style>
    <style type="text/css">
        .blog-big .meta, .blog-small .meta { background-color: #ffffff; }
    </style>
    <style type="text/css">
        ul.products li.product.list {padding-left:293px}
        ul.products li.product.list .product-thumbnail {margin-left:-293px}
        .widget.widget_onsale li,
        .widget.widget_best_sellers li,
        .widget.widget_recent_reviews li,
        .widget.widget_recent_products li,
        .widget.widget_random_products li,
        .widget.widget_featured_products li,
        .widget.widget_top_rated_products li,
        .widget.widget_recently_viewed_products li {min-height: 80px}

        .widget.widget_onsale li .star-rating,
        .widget.widget_best_sellers li .star-rating,
        .widget.widget_recent_reviews li .star-rating,
        .widget.widget_recent_products li .star-rating,
        .widget.widget_random_products li .star-rating,
        .widget.widget_featured_products li .star-rating,
        .widget.widget_top_rated_products li .star-rating,
        .widget.widget_recently_viewed_products li .star-rating { margin-left: 115px}

            /* IE8, Portrait tablet to landscape and desktop till 1024px */
        .single-product div.images { width:50.8045977011%; }
        .single-product div.summary { width:42.6666666667%; }

            /* WooCommerce standard images */
        .single-product .images .thumbnails > a { width:80px !important; height:80px !important; }
            /* Slider images */
        .single-product .images .thumbnails li img { max-width:80px !important; }

            /* Desktop above 1200px */
        @media (min-width:1200px) {
            .single-product div.images .yith_magnifier_zoom_wrap a img,
            .single-product div.images > a img{ width:462px; height:392px; }
            /* WooCommerce standard images */
            .single-product .images .thumbnails > a { width:100px !important; height:80px !important; }
            /* Slider images */
            .single-product .images .thumbnails li img { max-width:100px !important; }
        }

            /* Desktop above 1200px */
        @media (max-width: 979px) and (min-width: 768px) {
            /* WooCommerce standard images */
            .single-product .images .thumbnails > a { width:63px !important; height:63px !important; }
            /* Slider images */
            .single-product .images .thumbnails li img { max-width:63px !important; }
        }

            /* Below 767px, mobiles included */
        @media (max-width: 767px) {
            .single-product div.images,
            .single-product div.summary { float:none;margin-left:0px !important;width:100% !important; }

            .single-product div.images { margin-bottom:20px; }

            /* WooCommerce standard images */
            .single-product .images .thumbnails > a { width:65px !important; height:65px !important; }
            /* Slider images */
            .single-product .images .thumbnails li img { max-width:65px !important; }
        }
    </style>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>
<?php echo '<body class="'.$bazarCssBodyTag.'">'; ?>
<!--<body class="page page-id-696 page-child parent-pageid-2 page-template-default no_js responsive stretched chrome">-->


<!-- START BG SHADOW -->
<div class="bg-shadow">

    <!-- START WRAPPER -->
    <div id="wrapper" class="container group">
    <!-- Page Header -->
    <?php include './'. base_path().path_to_theme() .'/templates/section--header.php';?>

    <!-- Main Content -->
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

    <!-- Page Header -->
    <?php include './'. base_path().path_to_theme() .'/templates/section--footer.php';?>

    </div>
    <!-- END WRAPPER -->
  </div>
  <!-- END BG SHADOW -->


    <script type="text/javascript">
        var elastislide_defaults = {
            imageW: "100%",
            border		: 0,
            margin      : 0,
            preventDefaultEvents: false,
            infinite : true,
            slideshowSpeed : 3500
        };

        var carouFredSelOptions_defaults = {
            responsive: false,
            auto: true,
            items: 3,
            circular: true,
            infinite: true,
            debug: false,
            prev: '.es-nav .es-nav-prev',
            next: '.es-nav .es-nav-next',
            swipe: {
                onTouch: true
            },
            scroll : {
                items     : 1,
                pauseOnHover: true
            }
        };


    </script>

<!--  <div class="style-picker">-->
<!--    <div class="container bgChanger">-->
<!--    <a href="#" class="handler"> </a>-->
<!---->
<!--    <div class="options">-->
<!--    <span>Layout theme</span>-->
<!---->
<!--    <select name="layout" id="layout">-->
<!--        <option value="boxed">Boxed</option>-->
<!--        <option value="stretched">Stretched</option>-->
<!--    </select>-->
<!---->
<!--    <div id="bgs">-->
<!--        <div class="stBgs stBlock" style="padding-bottom:8px;border-top:0;">-->
<!--            <span>Backgrounds</span>-->
<!---->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/default.jpg"-->
<!--               class="thumb-img bgBody" title="Default Background"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/default.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/002.jpg"-->
<!--               class="thumb-img bgBody" title="Background 2"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/002.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/003.jpg"-->
<!--               class="thumb-img bgBody" title="Background 3"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/003.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/004.jpg"-->
<!--               class="thumb-img bgBody" title="Background 4"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/004.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/005.jpg"-->
<!--               class="thumb-img bgBody" title="Background 5"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/005.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/006.jpg"-->
<!--               class="thumb-img bgBody" title="Background 6"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/006.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/051.jpg"-->
<!--               class="thumb-img bgBody" title="Background 7"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/051.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/052.jpg"-->
<!--               class="thumb-img bgBody" title="Background 8"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/052.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/009.jpg"-->
<!--               class="thumb-img bgBody" title="Background 9"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/009.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/053.jpg"-->
<!--               class="thumb-img bgBody" title="Background 10"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/053.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/011.jpg"-->
<!--               class="thumb-img bgBody" title="Background 11"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/011.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/054.jpg"-->
<!--               class="thumb-img bgBody" title="Background 12"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/054.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/013.jpg"-->
<!--               class="thumb-img bgBody" title="Background 13"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/013.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/014.jpg"-->
<!--               class="thumb-img bgBody" title="Background 14"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/014.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/015.jpg"-->
<!--               class="thumb-img bgBody" title="Background 15"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/015.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/016.jpg"-->
<!--               class="thumb-img bgBody" title="Background 16"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/016.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/017.jpg"-->
<!--               class="thumb-img bgBody" title="Background 17"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/017.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/018.jpg"-->
<!--               class="thumb-img bgBody" title="Background 18"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/018.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/019.jpg"-->
<!--               class="thumb-img bgBody" title="Background 19"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/019.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/055.jpg"-->
<!--               class="thumb-img bgBody" title="Background 20"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/055.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/021.jpg"-->
<!--               class="thumb-img bgBody" title="Background 21"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/021.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/022.jpg"-->
<!--               class="thumb-img bgBody" title="Background 22"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/022.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/023.jpg"-->
<!--               class="thumb-img bgBody" title="Background 23"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/023.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/024.jpg"-->
<!--               class="thumb-img bgBody" title="Background 24"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/024.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/025.jpg"-->
<!--               class="thumb-img bgBody" title="Background 25"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/025.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/026.jpg"-->
<!--               class="thumb-img bgBody" title="Background 26"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/026.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/027.jpg"-->
<!--               class="thumb-img bgBody" title="Background 27"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/027.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/028.jpg"-->
<!--               class="thumb-img bgBody" title="Background 28"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/028.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/029.jpg"-->
<!--               class="thumb-img bgBody" title="Background 29"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/029.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/031.jpg"-->
<!--               class="thumb-img bgBody" title="Background 31"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/031.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/032.jpg"-->
<!--               class="thumb-img bgBody" title="Background 32"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/032.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/033.jpg"-->
<!--               class="thumb-img bgBody" title="Background 33"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/033.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/034.jpg"-->
<!--               class="thumb-img bgBody" title="Background 34"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/034.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/035.jpg"-->
<!--               class="thumb-img bgBody" title="Background 35"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/035.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/036.jpg"-->
<!--               class="thumb-img bgBody" title="Background 36"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/036.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/037.jpg"-->
<!--               class="thumb-img bgBody" title="Background 37"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/037.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/039.jpg"-->
<!--               class="thumb-img bgBody" title="Background 39"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/039.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/042.jpg"-->
<!--               class="thumb-img bgBody" title="Background 42"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/042.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/043.jpg"-->
<!--               class="thumb-img bgBody" title="Background 43"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/043.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/045.jpg"-->
<!--               class="thumb-img bgBody" title="Background 45"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/045.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/046.jpg"-->
<!--               class="thumb-img bgBody" title="Background 46"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/046.jpg)">-->
<!--                 </a>-->
<!--            <a rel="http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/big/backgrounds/056.jpg"-->
<!--               class="thumb-img bgBody" title="Background 47"-->
<!--               style="background:#fff url(http://demo.yithemes.com/bazar/wp-content/plugins/style-picker/images/backgrounds/backgrounds/056.jpg)">-->
<!--                 </a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        <a href="#" class="bgColor">Color <span id="bgColor" title="fff" style="background-color:#fff;"> </span></a>-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        <a href="#" class="bgColor">Header Color <span id="bgHeaderColor" title="fff" style="background-color:#fff;"> </span></a>-->
<!--        <a style="position: relative; top: -10px;" href="#header" class="bgHeaderTransparent">[x reset color]</a>-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        <a href="#" class="bgColor">Footer Color <span id="bgFooterColor" title="fff" style="background-color:#fff;"> </span></a>-->
<!--        <a style="position: relative; top: -10px;" href="#footer" class="bgFooterTransparent">[x reset color]</a>-->
<!--    </div>-->
<!---->
<!--    <span>Headings - Google Font</span>-->
<!---->
<!--    <select name="hfont" id="hfont">-->
<!--    <option value="ABeeZee">ABeeZee</option>-->
<!--    <option value="Abel">Abel</option>-->
<!--    <option value="Abril Fatface">Abril Fatface</option>-->
<!--    <option value="Aclonica">Aclonica</option>-->
<!--    <option value="Acme">Acme</option>-->
<!--    <option value="Actor">Actor</option>-->
<!--    <option value="Adamina">Adamina</option>-->
<!--    <option value="Advent Pro">Advent Pro</option>-->
<!--    <option value="Aguafina Script">Aguafina Script</option>-->
<!--    <option value="Akronim">Akronim</option>-->
<!--    <option value="Aladin">Aladin</option>-->
<!--    <option value="Aldrich">Aldrich</option>-->
<!--    <option value="Alef">Alef</option>-->
<!--    <option value="Alegreya">Alegreya</option>-->
<!--    <option value="Alegreya SC">Alegreya SC</option>-->
<!--    <option value="Alex Brush">Alex Brush</option>-->
<!--    <option value="Alfa Slab One">Alfa Slab One</option>-->
<!--    <option value="Alice">Alice</option>-->
<!--    <option value="Alike">Alike</option>-->
<!--    <option value="Alike Angular">Alike Angular</option>-->
<!--    <option value="Allan">Allan</option>-->
<!--    <option value="Allerta">Allerta</option>-->
<!--    <option value="Allerta Stencil">Allerta Stencil</option>-->
<!--    <option value="Allura">Allura</option>-->
<!--    <option value="Almendra">Almendra</option>-->
<!--    <option value="Almendra Display">Almendra Display</option>-->
<!--    <option value="Almendra SC">Almendra SC</option>-->
<!--    <option value="Amarante">Amarante</option>-->
<!--    <option value="Amaranth">Amaranth</option>-->
<!--    <option value="Amatic SC">Amatic SC</option>-->
<!--    <option value="Amethysta">Amethysta</option>-->
<!--    <option value="Anaheim">Anaheim</option>-->
<!--    <option value="Andada">Andada</option>-->
<!--    <option value="Andika">Andika</option>-->
<!--    <option value="Angkor">Angkor</option>-->
<!--    <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>-->
<!--    <option value="Anonymous Pro">Anonymous Pro</option>-->
<!--    <option value="Antic">Antic</option>-->
<!--    <option value="Antic Didone">Antic Didone</option>-->
<!--    <option value="Antic Slab">Antic Slab</option>-->
<!--    <option value="Anton">Anton</option>-->
<!--    <option value="Arapey">Arapey</option>-->
<!--    <option value="Arbutus">Arbutus</option>-->
<!--    <option value="Arbutus Slab">Arbutus Slab</option>-->
<!--    <option value="Architects Daughter">Architects Daughter</option>-->
<!--    <option value="Archivo Black">Archivo Black</option>-->
<!--    <option value="Archivo Narrow">Archivo Narrow</option>-->
<!--    <option value="Arimo">Arimo</option>-->
<!--    <option value="Arizonia">Arizonia</option>-->
<!--    <option value="Armata">Armata</option>-->
<!--    <option value="Artifika">Artifika</option>-->
<!--    <option value="Arvo">Arvo</option>-->
<!--    <option value="Asap">Asap</option>-->
<!--    <option value="Asset">Asset</option>-->
<!--    <option value="Astloch">Astloch</option>-->
<!--    <option value="Asul">Asul</option>-->
<!--    <option value="Atomic Age">Atomic Age</option>-->
<!--    <option value="Aubrey">Aubrey</option>-->
<!--    <option value="Audiowide">Audiowide</option>-->
<!--    <option value="Autour One">Autour One</option>-->
<!--    <option value="Average">Average</option>-->
<!--    <option value="Average Sans">Average Sans</option>-->
<!--    <option value="Averia Gruesa Libre">Averia Gruesa Libre</option>-->
<!--    <option value="Averia Libre">Averia Libre</option>-->
<!--    <option value="Averia Sans Libre">Averia Sans Libre</option>-->
<!--    <option value="Averia Serif Libre">Averia Serif Libre</option>-->
<!--    <option value="Bad Script">Bad Script</option>-->
<!--    <option value="Balthazar">Balthazar</option>-->
<!--    <option value="Bangers">Bangers</option>-->
<!--    <option value="Basic">Basic</option>-->
<!--    <option value="Battambang">Battambang</option>-->
<!--    <option value="Baumans">Baumans</option>-->
<!--    <option value="Bayon">Bayon</option>-->
<!--    <option value="Belgrano">Belgrano</option>-->
<!--    <option value="Belleza">Belleza</option>-->
<!--    <option value="BenchNine">BenchNine</option>-->
<!--    <option value="Bentham">Bentham</option>-->
<!--    <option value="Berkshire Swash">Berkshire Swash</option>-->
<!--    <option value="Bevan">Bevan</option>-->
<!--    <option value="Bigelow Rules">Bigelow Rules</option>-->
<!--    <option value="Bigshot One">Bigshot One</option>-->
<!--    <option value="Bilbo">Bilbo</option>-->
<!--    <option value="Bilbo Swash Caps">Bilbo Swash Caps</option>-->
<!--    <option value="Bitter">Bitter</option>-->
<!--    <option value="Black Ops One">Black Ops One</option>-->
<!--    <option value="Bokor">Bokor</option>-->
<!--    <option value="Bonbon">Bonbon</option>-->
<!--    <option value="Boogaloo">Boogaloo</option>-->
<!--    <option value="Bowlby One">Bowlby One</option>-->
<!--    <option value="Bowlby One SC">Bowlby One SC</option>-->
<!--    <option value="Brawler">Brawler</option>-->
<!--    <option value="Bree Serif">Bree Serif</option>-->
<!--    <option value="Bubblegum Sans">Bubblegum Sans</option>-->
<!--    <option value="Bubbler One">Bubbler One</option>-->
<!--    <option value="Buda:300">Buda:300</option>-->
<!--    <option value="Buenard">Buenard</option>-->
<!--    <option value="Butcherman">Butcherman</option>-->
<!--    <option value="Butterfly Kids">Butterfly Kids</option>-->
<!--    <option value="Cabin">Cabin</option>-->
<!--    <option value="Cabin Condensed">Cabin Condensed</option>-->
<!--    <option value="Cabin Sketch">Cabin Sketch</option>-->
<!--    <option value="Caesar Dressing">Caesar Dressing</option>-->
<!--    <option value="Cagliostro">Cagliostro</option>-->
<!--    <option value="Calligraffitti">Calligraffitti</option>-->
<!--    <option value="Cambo">Cambo</option>-->
<!--    <option value="Candal">Candal</option>-->
<!--    <option value="Cantarell">Cantarell</option>-->
<!--    <option value="Cantata One">Cantata One</option>-->
<!--    <option value="Cantora One">Cantora One</option>-->
<!--    <option value="Capriola">Capriola</option>-->
<!--    <option value="Cardo">Cardo</option>-->
<!--    <option value="Carme">Carme</option>-->
<!--    <option value="Carrois Gothic">Carrois Gothic</option>-->
<!--    <option value="Carrois Gothic SC">Carrois Gothic SC</option>-->
<!--    <option value="Carter One">Carter One</option>-->
<!--    <option value="Caudex">Caudex</option>-->
<!--    <option value="Cedarville Cursive">Cedarville Cursive</option>-->
<!--    <option value="Ceviche One">Ceviche One</option>-->
<!--    <option value="Changa One">Changa One</option>-->
<!--    <option value="Chango">Chango</option>-->
<!--    <option value="Chau Philomene One">Chau Philomene One</option>-->
<!--    <option value="Chela One">Chela One</option>-->
<!--    <option value="Chelsea Market">Chelsea Market</option>-->
<!--    <option value="Chenla">Chenla</option>-->
<!--    <option value="Cherry Cream Soda">Cherry Cream Soda</option>-->
<!--    <option value="Cherry Swash">Cherry Swash</option>-->
<!--    <option value="Chewy">Chewy</option>-->
<!--    <option value="Chicle">Chicle</option>-->
<!--    <option value="Chivo">Chivo</option>-->
<!--    <option value="Cinzel">Cinzel</option>-->
<!--    <option value="Cinzel Decorative">Cinzel Decorative</option>-->
<!--    <option value="Clicker Script">Clicker Script</option>-->
<!--    <option value="Coda">Coda</option>-->
<!--    <option value="Coda Caption:800">Coda Caption:800</option>-->
<!--    <option value="Codystar">Codystar</option>-->
<!--    <option value="Combo">Combo</option>-->
<!--    <option value="Comfortaa">Comfortaa</option>-->
<!--    <option value="Coming Soon">Coming Soon</option>-->
<!--    <option value="Concert One">Concert One</option>-->
<!--    <option value="Condiment">Condiment</option>-->
<!--    <option value="Content">Content</option>-->
<!--    <option value="Contrail One">Contrail One</option>-->
<!--    <option value="Convergence">Convergence</option>-->
<!--    <option value="Cookie">Cookie</option>-->
<!--    <option value="Copse">Copse</option>-->
<!--    <option value="Corben">Corben</option>-->
<!--    <option value="Courgette">Courgette</option>-->
<!--    <option value="Cousine">Cousine</option>-->
<!--    <option value="Coustard">Coustard</option>-->
<!--    <option value="Covered By Your Grace">Covered By Your Grace</option>-->
<!--    <option value="Crafty Girls">Crafty Girls</option>-->
<!--    <option value="Creepster">Creepster</option>-->
<!--    <option value="Crete Round">Crete Round</option>-->
<!--    <option value="Crimson Text">Crimson Text</option>-->
<!--    <option value="Croissant One">Croissant One</option>-->
<!--    <option value="Crushed">Crushed</option>-->
<!--    <option value="Cuprum">Cuprum</option>-->
<!--    <option value="Cutive">Cutive</option>-->
<!--    <option value="Cutive Mono">Cutive Mono</option>-->
<!--    <option value="Damion">Damion</option>-->
<!--    <option value="Dancing Script">Dancing Script</option>-->
<!--    <option value="Dangrek">Dangrek</option>-->
<!--    <option value="Dawning of a New Day">Dawning of a New Day</option>-->
<!--    <option value="Days One">Days One</option>-->
<!--    <option value="Delius">Delius</option>-->
<!--    <option value="Delius Swash Caps">Delius Swash Caps</option>-->
<!--    <option value="Delius Unicase">Delius Unicase</option>-->
<!--    <option value="Della Respira">Della Respira</option>-->
<!--    <option value="Denk One">Denk One</option>-->
<!--    <option value="Devonshire">Devonshire</option>-->
<!--    <option value="Didact Gothic">Didact Gothic</option>-->
<!--    <option value="Diplomata">Diplomata</option>-->
<!--    <option value="Diplomata SC">Diplomata SC</option>-->
<!--    <option value="Domine">Domine</option>-->
<!--    <option value="Donegal One">Donegal One</option>-->
<!--    <option value="Doppio One">Doppio One</option>-->
<!--    <option value="Dorsa">Dorsa</option>-->
<!--    <option value="Dosis">Dosis</option>-->
<!--    <option value="Dr Sugiyama">Dr Sugiyama</option>-->
<!--    <option value="Droid Sans">Droid Sans</option>-->
<!--    <option value="Droid Sans Mono">Droid Sans Mono</option>-->
<!--    <option value="Droid Serif">Droid Serif</option>-->
<!--    <option value="Duru Sans">Duru Sans</option>-->
<!--    <option value="Dynalight">Dynalight</option>-->
<!--    <option value="EB Garamond">EB Garamond</option>-->
<!--    <option value="Eagle Lake">Eagle Lake</option>-->
<!--    <option value="Eater">Eater</option>-->
<!--    <option value="Economica">Economica</option>-->
<!--    <option value="Electrolize">Electrolize</option>-->
<!--    <option value="Elsie">Elsie</option>-->
<!--    <option value="Elsie Swash Caps">Elsie Swash Caps</option>-->
<!--    <option value="Emblema One">Emblema One</option>-->
<!--    <option value="Emilys Candy">Emilys Candy</option>-->
<!--    <option value="Engagement">Engagement</option>-->
<!--    <option value="Englebert">Englebert</option>-->
<!--    <option value="Enriqueta">Enriqueta</option>-->
<!--    <option value="Erica One">Erica One</option>-->
<!--    <option value="Esteban">Esteban</option>-->
<!--    <option value="Euphoria Script">Euphoria Script</option>-->
<!--    <option value="Ewert">Ewert</option>-->
<!--    <option value="Exo">Exo</option>-->
<!--    <option value="Expletus Sans">Expletus Sans</option>-->
<!--    <option value="Fanwood Text">Fanwood Text</option>-->
<!--    <option value="Fascinate">Fascinate</option>-->
<!--    <option value="Fascinate Inline">Fascinate Inline</option>-->
<!--    <option value="Faster One">Faster One</option>-->
<!--    <option value="Fasthand">Fasthand</option>-->
<!--    <option value="Fauna One">Fauna One</option>-->
<!--    <option value="Federant">Federant</option>-->
<!--    <option value="Federo">Federo</option>-->
<!--    <option value="Felipa">Felipa</option>-->
<!--    <option value="Fenix">Fenix</option>-->
<!--    <option value="Finger Paint">Finger Paint</option>-->
<!--    <option value="Fjalla One">Fjalla One</option>-->
<!--    <option value="Fjord One">Fjord One</option>-->
<!--    <option value="Flamenco">Flamenco</option>-->
<!--    <option value="Flavors">Flavors</option>-->
<!--    <option value="Fondamento">Fondamento</option>-->
<!--    <option value="Fontdiner Swanky">Fontdiner Swanky</option>-->
<!--    <option value="Forum">Forum</option>-->
<!--    <option value="Francois One">Francois One</option>-->
<!--    <option value="Freckle Face">Freckle Face</option>-->
<!--    <option value="Fredericka the Great">Fredericka the Great</option>-->
<!--    <option value="Fredoka One">Fredoka One</option>-->
<!--    <option value="Freehand">Freehand</option>-->
<!--    <option value="Fresca">Fresca</option>-->
<!--    <option value="Frijole">Frijole</option>-->
<!--    <option value="Fruktur">Fruktur</option>-->
<!--    <option value="Fugaz One">Fugaz One</option>-->
<!--    <option value="GFS Didot">GFS Didot</option>-->
<!--    <option value="GFS Neohellenic">GFS Neohellenic</option>-->
<!--    <option value="Gabriela">Gabriela</option>-->
<!--    <option value="Gafata">Gafata</option>-->
<!--    <option value="Galdeano">Galdeano</option>-->
<!--    <option value="Galindo">Galindo</option>-->
<!--    <option value="Gentium Basic">Gentium Basic</option>-->
<!--    <option value="Gentium Book Basic">Gentium Book Basic</option>-->
<!--    <option value="Geo">Geo</option>-->
<!--    <option value="Geostar">Geostar</option>-->
<!--    <option value="Geostar Fill">Geostar Fill</option>-->
<!--    <option value="Germania One">Germania One</option>-->
<!--    <option value="Gilda Display">Gilda Display</option>-->
<!--    <option value="Give You Glory">Give You Glory</option>-->
<!--    <option value="Glass Antiqua">Glass Antiqua</option>-->
<!--    <option value="Glegoo">Glegoo</option>-->
<!--    <option value="Gloria Hallelujah">Gloria Hallelujah</option>-->
<!--    <option value="Goblin One">Goblin One</option>-->
<!--    <option value="Gochi Hand">Gochi Hand</option>-->
<!--    <option value="Gorditas">Gorditas</option>-->
<!--    <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>-->
<!--    <option value="Graduate">Graduate</option>-->
<!--    <option value="Grand Hotel">Grand Hotel</option>-->
<!--    <option value="Gravitas One">Gravitas One</option>-->
<!--    <option value="Great Vibes">Great Vibes</option>-->
<!--    <option value="Griffy">Griffy</option>-->
<!--    <option value="Gruppo">Gruppo</option>-->
<!--    <option value="Gudea">Gudea</option>-->
<!--    <option value="Habibi">Habibi</option>-->
<!--    <option value="Hammersmith One">Hammersmith One</option>-->
<!--    <option value="Hanalei">Hanalei</option>-->
<!--    <option value="Hanalei Fill">Hanalei Fill</option>-->
<!--    <option value="Handlee">Handlee</option>-->
<!--    <option value="Hanuman">Hanuman</option>-->
<!--    <option value="Happy Monkey">Happy Monkey</option>-->
<!--    <option value="Headland One">Headland One</option>-->
<!--    <option value="Henny Penny">Henny Penny</option>-->
<!--    <option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>-->
<!--    <option value="Holtwood One SC">Holtwood One SC</option>-->
<!--    <option value="Homemade Apple">Homemade Apple</option>-->
<!--    <option value="Homenaje">Homenaje</option>-->
<!--    <option value="IM Fell DW Pica">IM Fell DW Pica</option>-->
<!--    <option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>-->
<!--    <option value="IM Fell Double Pica">IM Fell Double Pica</option>-->
<!--    <option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>-->
<!--    <option value="IM Fell English">IM Fell English</option>-->
<!--    <option value="IM Fell English SC">IM Fell English SC</option>-->
<!--    <option value="IM Fell French Canon">IM Fell French Canon</option>-->
<!--    <option value="IM Fell French Canon SC">IM Fell French Canon SC</option>-->
<!--    <option value="IM Fell Great Primer">IM Fell Great Primer</option>-->
<!--    <option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>-->
<!--    <option value="Iceberg">Iceberg</option>-->
<!--    <option value="Iceland">Iceland</option>-->
<!--    <option value="Imprima">Imprima</option>-->
<!--    <option value="Inconsolata">Inconsolata</option>-->
<!--    <option value="Inder">Inder</option>-->
<!--    <option value="Indie Flower">Indie Flower</option>-->
<!--    <option value="Inika">Inika</option>-->
<!--    <option value="Irish Grover">Irish Grover</option>-->
<!--    <option value="Istok Web">Istok Web</option>-->
<!--    <option value="Italiana">Italiana</option>-->
<!--    <option value="Italianno">Italianno</option>-->
<!--    <option value="Jacques Francois">Jacques Francois</option>-->
<!--    <option value="Jacques Francois Shadow">Jacques Francois Shadow</option>-->
<!--    <option value="Jim Nightshade">Jim Nightshade</option>-->
<!--    <option value="Jockey One">Jockey One</option>-->
<!--    <option value="Jolly Lodger">Jolly Lodger</option>-->
<!--    <option value="Josefin Sans">Josefin Sans</option>-->
<!--    <option value="Josefin Slab">Josefin Slab</option>-->
<!--    <option value="Joti One">Joti One</option>-->
<!--    <option value="Judson">Judson</option>-->
<!--    <option value="Julee">Julee</option>-->
<!--    <option value="Julius Sans One">Julius Sans One</option>-->
<!--    <option value="Junge">Junge</option>-->
<!--    <option value="Jura">Jura</option>-->
<!--    <option value="Just Another Hand">Just Another Hand</option>-->
<!--    <option value="Just Me Again Down Here">Just Me Again Down Here</option>-->
<!--    <option value="Kameron">Kameron</option>-->
<!--    <option value="Karla">Karla</option>-->
<!--    <option value="Kaushan Script">Kaushan Script</option>-->
<!--    <option value="Kavoon">Kavoon</option>-->
<!--    <option value="Keania One">Keania One</option>-->
<!--    <option value="Kelly Slab">Kelly Slab</option>-->
<!--    <option value="Kenia">Kenia</option>-->
<!--    <option value="Khmer">Khmer</option>-->
<!--    <option value="Kite One">Kite One</option>-->
<!--    <option value="Knewave">Knewave</option>-->
<!--    <option value="Kotta One">Kotta One</option>-->
<!--    <option value="Koulen">Koulen</option>-->
<!--    <option value="Kranky">Kranky</option>-->
<!--    <option value="Kreon">Kreon</option>-->
<!--    <option value="Kristi">Kristi</option>-->
<!--    <option value="Krona One">Krona One</option>-->
<!--    <option value="La Belle Aurore">La Belle Aurore</option>-->
<!--    <option value="Lancelot">Lancelot</option>-->
<!--    <option value="Lato">Lato</option>-->
<!--    <option value="League Script">League Script</option>-->
<!--    <option value="Leckerli One">Leckerli One</option>-->
<!--    <option value="Ledger">Ledger</option>-->
<!--    <option value="Lekton">Lekton</option>-->
<!--    <option value="Lemon">Lemon</option>-->
<!--    <option value="Libre Baskerville">Libre Baskerville</option>-->
<!--    <option value="Life Savers">Life Savers</option>-->
<!--    <option value="Lilita One">Lilita One</option>-->
<!--    <option value="Lily Script One">Lily Script One</option>-->
<!--    <option value="Limelight">Limelight</option>-->
<!--    <option value="Linden Hill">Linden Hill</option>-->
<!--    <option value="Lobster">Lobster</option>-->
<!--    <option value="Lobster Two">Lobster Two</option>-->
<!--    <option value="Londrina Outline">Londrina Outline</option>-->
<!--    <option value="Londrina Shadow">Londrina Shadow</option>-->
<!--    <option value="Londrina Sketch">Londrina Sketch</option>-->
<!--    <option value="Londrina Solid">Londrina Solid</option>-->
<!--    <option value="Lora">Lora</option>-->
<!--    <option value="Love Ya Like A Sister">Love Ya Like A Sister</option>-->
<!--    <option value="Loved by the King">Loved by the King</option>-->
<!--    <option value="Lovers Quarrel">Lovers Quarrel</option>-->
<!--    <option value="Luckiest Guy">Luckiest Guy</option>-->
<!--    <option value="Lusitana">Lusitana</option>-->
<!--    <option value="Lustria">Lustria</option>-->
<!--    <option value="Macondo">Macondo</option>-->
<!--    <option value="Macondo Swash Caps">Macondo Swash Caps</option>-->
<!--    <option value="Magra">Magra</option>-->
<!--    <option value="Maiden Orange">Maiden Orange</option>-->
<!--    <option value="Mako">Mako</option>-->
<!--    <option value="Marcellus">Marcellus</option>-->
<!--    <option value="Marcellus SC">Marcellus SC</option>-->
<!--    <option value="Marck Script">Marck Script</option>-->
<!--    <option value="Margarine">Margarine</option>-->
<!--    <option value="Marko One">Marko One</option>-->
<!--    <option value="Marmelad">Marmelad</option>-->
<!--    <option value="Marvel">Marvel</option>-->
<!--    <option value="Mate">Mate</option>-->
<!--    <option value="Mate SC">Mate SC</option>-->
<!--    <option value="Maven Pro">Maven Pro</option>-->
<!--    <option value="McLaren">McLaren</option>-->
<!--    <option value="Meddon">Meddon</option>-->
<!--    <option value="MedievalSharp">MedievalSharp</option>-->
<!--    <option value="Medula One">Medula One</option>-->
<!--    <option value="Megrim">Megrim</option>-->
<!--    <option value="Meie Script">Meie Script</option>-->
<!--    <option value="Merienda">Merienda</option>-->
<!--    <option value="Merienda One">Merienda One</option>-->
<!--    <option value="Merriweather">Merriweather</option>-->
<!--    <option value="Merriweather Sans">Merriweather Sans</option>-->
<!--    <option value="Metal">Metal</option>-->
<!--    <option value="Metal Mania">Metal Mania</option>-->
<!--    <option value="Metamorphous">Metamorphous</option>-->
<!--    <option value="Metrophobic">Metrophobic</option>-->
<!--    <option value="Michroma">Michroma</option>-->
<!--    <option value="Milonga">Milonga</option>-->
<!--    <option value="Miltonian">Miltonian</option>-->
<!--    <option value="Miltonian Tattoo">Miltonian Tattoo</option>-->
<!--    <option value="Miniver">Miniver</option>-->
<!--    <option value="Miss Fajardose">Miss Fajardose</option>-->
<!--    <option value="Modern Antiqua">Modern Antiqua</option>-->
<!--    <option value="Molengo">Molengo</option>-->
<!--    <option value="Molle:italic">Molle:italic</option>-->
<!--    <option value="Monda">Monda</option>-->
<!--    <option value="Monofett">Monofett</option>-->
<!--    <option value="Monoton">Monoton</option>-->
<!--    <option value="Monsieur La Doulaise">Monsieur La Doulaise</option>-->
<!--    <option value="Montaga">Montaga</option>-->
<!--    <option value="Montez">Montez</option>-->
<!--    <option value="Montserrat">Montserrat</option>-->
<!--    <option value="Montserrat Alternates">Montserrat Alternates</option>-->
<!--    <option value="Montserrat Subrayada">Montserrat Subrayada</option>-->
<!--    <option value="Moul">Moul</option>-->
<!--    <option value="Moulpali">Moulpali</option>-->
<!--    <option value="Mountains of Christmas">Mountains of Christmas</option>-->
<!--    <option value="Mouse Memoirs">Mouse Memoirs</option>-->
<!--    <option value="Mr Bedfort">Mr Bedfort</option>-->
<!--    <option value="Mr Dafoe">Mr Dafoe</option>-->
<!--    <option value="Mr De Haviland">Mr De Haviland</option>-->
<!--    <option value="Mrs Saint Delafield">Mrs Saint Delafield</option>-->
<!--    <option value="Mrs Sheppards">Mrs Sheppards</option>-->
<!--    <option value="Muli">Muli</option>-->
<!--    <option value="Mystery Quest">Mystery Quest</option>-->
<!--    <option value="Neucha">Neucha</option>-->
<!--    <option value="Neuton">Neuton</option>-->
<!--    <option value="New Rocker">New Rocker</option>-->
<!--    <option value="News Cycle">News Cycle</option>-->
<!--    <option value="Niconne">Niconne</option>-->
<!--    <option value="Nixie One">Nixie One</option>-->
<!--    <option value="Nobile">Nobile</option>-->
<!--    <option value="Nokora">Nokora</option>-->
<!--    <option value="Norican">Norican</option>-->
<!--    <option value="Nosifer">Nosifer</option>-->
<!--    <option value="Nothing You Could Do">Nothing You Could Do</option>-->
<!--    <option value="Noticia Text">Noticia Text</option>-->
<!--    <option value="Noto Sans">Noto Sans</option>-->
<!--    <option value="Noto Serif">Noto Serif</option>-->
<!--    <option value="Nova Cut">Nova Cut</option>-->
<!--    <option value="Nova Flat">Nova Flat</option>-->
<!--    <option value="Nova Mono">Nova Mono</option>-->
<!--    <option value="Nova Oval">Nova Oval</option>-->
<!--    <option value="Nova Round">Nova Round</option>-->
<!--    <option value="Nova Script">Nova Script</option>-->
<!--    <option value="Nova Slim">Nova Slim</option>-->
<!--    <option value="Nova Square">Nova Square</option>-->
<!--    <option value="Numans">Numans</option>-->
<!--    <option value="Nunito">Nunito</option>-->
<!--    <option value="Odor Mean Chey">Odor Mean Chey</option>-->
<!--    <option value="Offside">Offside</option>-->
<!--    <option value="Old Standard TT">Old Standard TT</option>-->
<!--    <option value="Oldenburg">Oldenburg</option>-->
<!--    <option value="Oleo Script">Oleo Script</option>-->
<!--    <option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>-->
<!--    <option value="Open Sans">Open Sans</option>-->
<!--    <option value="Open Sans Condensed:300">Open Sans Condensed:300</option>-->
<!--    <option value="Open Sans Condensed:300italic">Open Sans Condensed:300italic</option>-->
<!--    <option value="Open Sans Condensed:700">Open Sans Condensed:700</option>-->
<!--    <option value="Oranienbaum">Oranienbaum</option>-->
<!--    <option value="Orbitron">Orbitron</option>-->
<!--    <option value="Oregano">Oregano</option>-->
<!--    <option value="Orienta">Orienta</option>-->
<!--    <option value="Original Surfer">Original Surfer</option>-->
<!--    <option value="Oswald" selected='selected'>Oswald</option>-->
<!--    <option value="Over the Rainbow">Over the Rainbow</option>-->
<!--    <option value="Overlock">Overlock</option>-->
<!--    <option value="Overlock SC">Overlock SC</option>-->
<!--    <option value="Ovo">Ovo</option>-->
<!--    <option value="Oxygen">Oxygen</option>-->
<!--    <option value="Oxygen Mono">Oxygen Mono</option>-->
<!--    <option value="PT Mono">PT Mono</option>-->
<!--    <option value="PT Sans">PT Sans</option>-->
<!--    <option value="PT Sans Caption">PT Sans Caption</option>-->
<!--    <option value="PT Sans Narrow">PT Sans Narrow</option>-->
<!--    <option value="PT Serif">PT Serif</option>-->
<!--    <option value="PT Serif Caption">PT Serif Caption</option>-->
<!--    <option value="Pacifico">Pacifico</option>-->
<!--    <option value="Paprika">Paprika</option>-->
<!--    <option value="Parisienne">Parisienne</option>-->
<!--    <option value="Passero One">Passero One</option>-->
<!--    <option value="Passion One">Passion One</option>-->
<!--    <option value="Pathway Gothic One">Pathway Gothic One</option>-->
<!--    <option value="Patrick Hand">Patrick Hand</option>-->
<!--    <option value="Patrick Hand SC">Patrick Hand SC</option>-->
<!--    <option value="Patua One">Patua One</option>-->
<!--    <option value="Paytone One">Paytone One</option>-->
<!--    <option value="Peralta">Peralta</option>-->
<!--    <option value="Permanent Marker">Permanent Marker</option>-->
<!--    <option value="Petit Formal Script">Petit Formal Script</option>-->
<!--    <option value="Petrona">Petrona</option>-->
<!--    <option value="Philosopher">Philosopher</option>-->
<!--    <option value="Piedra">Piedra</option>-->
<!--    <option value="Pinyon Script">Pinyon Script</option>-->
<!--    <option value="Pirata One">Pirata One</option>-->
<!--    <option value="Plaster">Plaster</option>-->
<!--    <option value="Play">Play</option>-->
<!--    <option value="Playball">Playball</option>-->
<!--    <option value="Playfair Display">Playfair Display</option>-->
<!--    <option value="Playfair Display SC">Playfair Display SC</option>-->
<!--    <option value="Podkova">Podkova</option>-->
<!--    <option value="Poiret One">Poiret One</option>-->
<!--    <option value="Poller One">Poller One</option>-->
<!--    <option value="Poly">Poly</option>-->
<!--    <option value="Pompiere">Pompiere</option>-->
<!--    <option value="Pontano Sans">Pontano Sans</option>-->
<!--    <option value="Port Lligat Sans">Port Lligat Sans</option>-->
<!--    <option value="Port Lligat Slab">Port Lligat Slab</option>-->
<!--    <option value="Prata">Prata</option>-->
<!--    <option value="Preahvihear">Preahvihear</option>-->
<!--    <option value="Press Start 2P">Press Start 2P</option>-->
<!--    <option value="Princess Sofia">Princess Sofia</option>-->
<!--    <option value="Prociono">Prociono</option>-->
<!--    <option value="Prosto One">Prosto One</option>-->
<!--    <option value="Puritan">Puritan</option>-->
<!--    <option value="Purple Purse">Purple Purse</option>-->
<!--    <option value="Quando">Quando</option>-->
<!--    <option value="Quantico">Quantico</option>-->
<!--    <option value="Quattrocento">Quattrocento</option>-->
<!--    <option value="Quattrocento Sans">Quattrocento Sans</option>-->
<!--    <option value="Questrial">Questrial</option>-->
<!--    <option value="Quicksand">Quicksand</option>-->
<!--    <option value="Quintessential">Quintessential</option>-->
<!--    <option value="Qwigley">Qwigley</option>-->
<!--    <option value="Racing Sans One">Racing Sans One</option>-->
<!--    <option value="Radley">Radley</option>-->
<!--    <option value="Raleway">Raleway</option>-->
<!--    <option value="Raleway Dots">Raleway Dots</option>-->
<!--    <option value="Rambla">Rambla</option>-->
<!--    <option value="Rammetto One">Rammetto One</option>-->
<!--    <option value="Ranchers">Ranchers</option>-->
<!--    <option value="Rancho">Rancho</option>-->
<!--    <option value="Rationale">Rationale</option>-->
<!--    <option value="Redressed">Redressed</option>-->
<!--    <option value="Reenie Beanie">Reenie Beanie</option>-->
<!--    <option value="Revalia">Revalia</option>-->
<!--    <option value="Ribeye">Ribeye</option>-->
<!--    <option value="Ribeye Marrow">Ribeye Marrow</option>-->
<!--    <option value="Righteous">Righteous</option>-->
<!--    <option value="Risque">Risque</option>-->
<!--    <option value="Roboto">Roboto</option>-->
<!--    <option value="Roboto Condensed">Roboto Condensed</option>-->
<!--    <option value="Roboto Slab">Roboto Slab</option>-->
<!--    <option value="Rochester">Rochester</option>-->
<!--    <option value="Rock Salt">Rock Salt</option>-->
<!--    <option value="Rokkitt">Rokkitt</option>-->
<!--    <option value="Romanesco">Romanesco</option>-->
<!--    <option value="Ropa Sans">Ropa Sans</option>-->
<!--    <option value="Rosario">Rosario</option>-->
<!--    <option value="Rosarivo">Rosarivo</option>-->
<!--    <option value="Rouge Script">Rouge Script</option>-->
<!--    <option value="Ruda">Ruda</option>-->
<!--    <option value="Rufina">Rufina</option>-->
<!--    <option value="Ruge Boogie">Ruge Boogie</option>-->
<!--    <option value="Ruluko">Ruluko</option>-->
<!--    <option value="Rum Raisin">Rum Raisin</option>-->
<!--    <option value="Ruslan Display">Ruslan Display</option>-->
<!--    <option value="Russo One">Russo One</option>-->
<!--    <option value="Ruthie">Ruthie</option>-->
<!--    <option value="Rye">Rye</option>-->
<!--    <option value="Sacramento">Sacramento</option>-->
<!--    <option value="Sail">Sail</option>-->
<!--    <option value="Salsa">Salsa</option>-->
<!--    <option value="Sanchez">Sanchez</option>-->
<!--    <option value="Sancreek">Sancreek</option>-->
<!--    <option value="Sansita One">Sansita One</option>-->
<!--    <option value="Sarina">Sarina</option>-->
<!--    <option value="Satisfy">Satisfy</option>-->
<!--    <option value="Scada">Scada</option>-->
<!--    <option value="Schoolbell">Schoolbell</option>-->
<!--    <option value="Seaweed Script">Seaweed Script</option>-->
<!--    <option value="Sevillana">Sevillana</option>-->
<!--    <option value="Seymour One">Seymour One</option>-->
<!--    <option value="Shadows Into Light">Shadows Into Light</option>-->
<!--    <option value="Shadows Into Light Two">Shadows Into Light Two</option>-->
<!--    <option value="Shanti">Shanti</option>-->
<!--    <option value="Share">Share</option>-->
<!--    <option value="Share Tech">Share Tech</option>-->
<!--    <option value="Share Tech Mono">Share Tech Mono</option>-->
<!--    <option value="Shojumaru">Shojumaru</option>-->
<!--    <option value="Short Stack">Short Stack</option>-->
<!--    <option value="Siemreap">Siemreap</option>-->
<!--    <option value="Sigmar One">Sigmar One</option>-->
<!--    <option value="Signika">Signika</option>-->
<!--    <option value="Signika Negative">Signika Negative</option>-->
<!--    <option value="Simonetta">Simonetta</option>-->
<!--    <option value="Sintony">Sintony</option>-->
<!--    <option value="Sirin Stencil">Sirin Stencil</option>-->
<!--    <option value="Six Caps">Six Caps</option>-->
<!--    <option value="Skranji">Skranji</option>-->
<!--    <option value="Slackey">Slackey</option>-->
<!--    <option value="Smokum">Smokum</option>-->
<!--    <option value="Smythe">Smythe</option>-->
<!--    <option value="Sniglet:800">Sniglet:800</option>-->
<!--    <option value="Snippet">Snippet</option>-->
<!--    <option value="Snowburst One">Snowburst One</option>-->
<!--    <option value="Sofadi One">Sofadi One</option>-->
<!--    <option value="Sofia">Sofia</option>-->
<!--    <option value="Sonsie One">Sonsie One</option>-->
<!--    <option value="Sorts Mill Goudy">Sorts Mill Goudy</option>-->
<!--    <option value="Source Code Pro">Source Code Pro</option>-->
<!--    <option value="Source Sans Pro">Source Sans Pro</option>-->
<!--    <option value="Special Elite">Special Elite</option>-->
<!--    <option value="Spicy Rice">Spicy Rice</option>-->
<!--    <option value="Spinnaker">Spinnaker</option>-->
<!--    <option value="Spirax">Spirax</option>-->
<!--    <option value="Squada One">Squada One</option>-->
<!--    <option value="Stalemate">Stalemate</option>-->
<!--    <option value="Stalinist One">Stalinist One</option>-->
<!--    <option value="Stardos Stencil">Stardos Stencil</option>-->
<!--    <option value="Stint Ultra Condensed">Stint Ultra Condensed</option>-->
<!--    <option value="Stint Ultra Expanded">Stint Ultra Expanded</option>-->
<!--    <option value="Stoke">Stoke</option>-->
<!--    <option value="Strait">Strait</option>-->
<!--    <option value="Sue Ellen Francisco">Sue Ellen Francisco</option>-->
<!--    <option value="Sunshiney">Sunshiney</option>-->
<!--    <option value="Supermercado One">Supermercado One</option>-->
<!--    <option value="Suwannaphum">Suwannaphum</option>-->
<!--    <option value="Swanky and Moo Moo">Swanky and Moo Moo</option>-->
<!--    <option value="Syncopate">Syncopate</option>-->
<!--    <option value="Tangerine">Tangerine</option>-->
<!--    <option value="Taprom">Taprom</option>-->
<!--    <option value="Tauri">Tauri</option>-->
<!--    <option value="Telex">Telex</option>-->
<!--    <option value="Tenor Sans">Tenor Sans</option>-->
<!--    <option value="Text Me One">Text Me One</option>-->
<!--    <option value="The Girl Next Door">The Girl Next Door</option>-->
<!--    <option value="Tienne">Tienne</option>-->
<!--    <option value="Tinos">Tinos</option>-->
<!--    <option value="Titan One">Titan One</option>-->
<!--    <option value="Titillium Web">Titillium Web</option>-->
<!--    <option value="Trade Winds">Trade Winds</option>-->
<!--    <option value="Trocchi">Trocchi</option>-->
<!--    <option value="Trochut">Trochut</option>-->
<!--    <option value="Trykker">Trykker</option>-->
<!--    <option value="Tulpen One">Tulpen One</option>-->
<!--    <option value="Ubuntu">Ubuntu</option>-->
<!--    <option value="Ubuntu Condensed">Ubuntu Condensed</option>-->
<!--    <option value="Ubuntu Mono">Ubuntu Mono</option>-->
<!--    <option value="Ultra">Ultra</option>-->
<!--    <option value="Uncial Antiqua">Uncial Antiqua</option>-->
<!--    <option value="Underdog">Underdog</option>-->
<!--    <option value="Unica One">Unica One</option>-->
<!--    <option value="UnifrakturCook:700">UnifrakturCook:700</option>-->
<!--    <option value="UnifrakturMaguntia">UnifrakturMaguntia</option>-->
<!--    <option value="Unkempt">Unkempt</option>-->
<!--    <option value="Unlock">Unlock</option>-->
<!--    <option value="Unna">Unna</option>-->
<!--    <option value="VT323">VT323</option>-->
<!--    <option value="Vampiro One">Vampiro One</option>-->
<!--    <option value="Varela">Varela</option>-->
<!--    <option value="Varela Round">Varela Round</option>-->
<!--    <option value="Vast Shadow">Vast Shadow</option>-->
<!--    <option value="Vibur">Vibur</option>-->
<!--    <option value="Vidaloka">Vidaloka</option>-->
<!--    <option value="Viga">Viga</option>-->
<!--    <option value="Voces">Voces</option>-->
<!--    <option value="Volkhov">Volkhov</option>-->
<!--    <option value="Vollkorn">Vollkorn</option>-->
<!--    <option value="Voltaire">Voltaire</option>-->
<!--    <option value="Waiting for the Sunrise">Waiting for the Sunrise</option>-->
<!--    <option value="Wallpoet">Wallpoet</option>-->
<!--    <option value="Walter Turncoat">Walter Turncoat</option>-->
<!--    <option value="Warnes">Warnes</option>-->
<!--    <option value="Wellfleet">Wellfleet</option>-->
<!--    <option value="Wendy One">Wendy One</option>-->
<!--    <option value="Wire One">Wire One</option>-->
<!--    <option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>-->
<!--    <option value="Yellowtail">Yellowtail</option>-->
<!--    <option value="Yeseva One">Yeseva One</option>-->
<!--    <option value="Yesteryear">Yesteryear</option>-->
<!--    <option value="Zeyada">Zeyada</option>-->
<!--    </select>-->
<!---->
<!--    <span>Content Font</span>-->
<!--    <select name="pfont" id="pfont">-->
<!--    <option value="ABeeZee">ABeeZee</option>-->
<!--    <option value="Abel">Abel</option>-->
<!--    <option value="Abril Fatface">Abril Fatface</option>-->
<!--    <option value="Aclonica">Aclonica</option>-->
<!--    <option value="Acme">Acme</option>-->
<!--    <option value="Actor">Actor</option>-->
<!--    <option value="Adamina">Adamina</option>-->
<!--    <option value="Advent Pro">Advent Pro</option>-->
<!--    <option value="Aguafina Script">Aguafina Script</option>-->
<!--    <option value="Akronim">Akronim</option>-->
<!--    <option value="Aladin">Aladin</option>-->
<!--    <option value="Aldrich">Aldrich</option>-->
<!--    <option value="Alef">Alef</option>-->
<!--    <option value="Alegreya">Alegreya</option>-->
<!--    <option value="Alegreya SC">Alegreya SC</option>-->
<!--    <option value="Alex Brush">Alex Brush</option>-->
<!--    <option value="Alfa Slab One">Alfa Slab One</option>-->
<!--    <option value="Alice">Alice</option>-->
<!--    <option value="Alike">Alike</option>-->
<!--    <option value="Alike Angular">Alike Angular</option>-->
<!--    <option value="Allan">Allan</option>-->
<!--    <option value="Allerta">Allerta</option>-->
<!--    <option value="Allerta Stencil">Allerta Stencil</option>-->
<!--    <option value="Allura">Allura</option>-->
<!--    <option value="Almendra">Almendra</option>-->
<!--    <option value="Almendra Display">Almendra Display</option>-->
<!--    <option value="Almendra SC">Almendra SC</option>-->
<!--    <option value="Amarante">Amarante</option>-->
<!--    <option value="Amaranth">Amaranth</option>-->
<!--    <option value="Amatic SC">Amatic SC</option>-->
<!--    <option value="Amethysta">Amethysta</option>-->
<!--    <option value="Anaheim">Anaheim</option>-->
<!--    <option value="Andada">Andada</option>-->
<!--    <option value="Andika">Andika</option>-->
<!--    <option value="Angkor">Angkor</option>-->
<!--    <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>-->
<!--    <option value="Anonymous Pro">Anonymous Pro</option>-->
<!--    <option value="Antic">Antic</option>-->
<!--    <option value="Antic Didone">Antic Didone</option>-->
<!--    <option value="Antic Slab">Antic Slab</option>-->
<!--    <option value="Anton">Anton</option>-->
<!--    <option value="Arapey">Arapey</option>-->
<!--    <option value="Arbutus">Arbutus</option>-->
<!--    <option value="Arbutus Slab">Arbutus Slab</option>-->
<!--    <option value="Architects Daughter">Architects Daughter</option>-->
<!--    <option value="Archivo Black">Archivo Black</option>-->
<!--    <option value="Archivo Narrow">Archivo Narrow</option>-->
<!--    <option value="Arimo">Arimo</option>-->
<!--    <option value="Arizonia">Arizonia</option>-->
<!--    <option value="Armata">Armata</option>-->
<!--    <option value="Artifika">Artifika</option>-->
<!--    <option value="Arvo">Arvo</option>-->
<!--    <option value="Asap">Asap</option>-->
<!--    <option value="Asset">Asset</option>-->
<!--    <option value="Astloch">Astloch</option>-->
<!--    <option value="Asul">Asul</option>-->
<!--    <option value="Atomic Age">Atomic Age</option>-->
<!--    <option value="Aubrey">Aubrey</option>-->
<!--    <option value="Audiowide">Audiowide</option>-->
<!--    <option value="Autour One">Autour One</option>-->
<!--    <option value="Average">Average</option>-->
<!--    <option value="Average Sans">Average Sans</option>-->
<!--    <option value="Averia Gruesa Libre">Averia Gruesa Libre</option>-->
<!--    <option value="Averia Libre">Averia Libre</option>-->
<!--    <option value="Averia Sans Libre">Averia Sans Libre</option>-->
<!--    <option value="Averia Serif Libre">Averia Serif Libre</option>-->
<!--    <option value="Bad Script">Bad Script</option>-->
<!--    <option value="Balthazar">Balthazar</option>-->
<!--    <option value="Bangers">Bangers</option>-->
<!--    <option value="Basic">Basic</option>-->
<!--    <option value="Battambang">Battambang</option>-->
<!--    <option value="Baumans">Baumans</option>-->
<!--    <option value="Bayon">Bayon</option>-->
<!--    <option value="Belgrano">Belgrano</option>-->
<!--    <option value="Belleza">Belleza</option>-->
<!--    <option value="BenchNine">BenchNine</option>-->
<!--    <option value="Bentham">Bentham</option>-->
<!--    <option value="Berkshire Swash">Berkshire Swash</option>-->
<!--    <option value="Bevan">Bevan</option>-->
<!--    <option value="Bigelow Rules">Bigelow Rules</option>-->
<!--    <option value="Bigshot One">Bigshot One</option>-->
<!--    <option value="Bilbo">Bilbo</option>-->
<!--    <option value="Bilbo Swash Caps">Bilbo Swash Caps</option>-->
<!--    <option value="Bitter">Bitter</option>-->
<!--    <option value="Black Ops One">Black Ops One</option>-->
<!--    <option value="Bokor">Bokor</option>-->
<!--    <option value="Bonbon">Bonbon</option>-->
<!--    <option value="Boogaloo">Boogaloo</option>-->
<!--    <option value="Bowlby One">Bowlby One</option>-->
<!--    <option value="Bowlby One SC">Bowlby One SC</option>-->
<!--    <option value="Brawler">Brawler</option>-->
<!--    <option value="Bree Serif">Bree Serif</option>-->
<!--    <option value="Bubblegum Sans">Bubblegum Sans</option>-->
<!--    <option value="Bubbler One">Bubbler One</option>-->
<!--    <option value="Buda:300">Buda:300</option>-->
<!--    <option value="Buenard">Buenard</option>-->
<!--    <option value="Butcherman">Butcherman</option>-->
<!--    <option value="Butterfly Kids">Butterfly Kids</option>-->
<!--    <option value="Cabin">Cabin</option>-->
<!--    <option value="Cabin Condensed">Cabin Condensed</option>-->
<!--    <option value="Cabin Sketch">Cabin Sketch</option>-->
<!--    <option value="Caesar Dressing">Caesar Dressing</option>-->
<!--    <option value="Cagliostro">Cagliostro</option>-->
<!--    <option value="Calligraffitti">Calligraffitti</option>-->
<!--    <option value="Cambo">Cambo</option>-->
<!--    <option value="Candal">Candal</option>-->
<!--    <option value="Cantarell">Cantarell</option>-->
<!--    <option value="Cantata One">Cantata One</option>-->
<!--    <option value="Cantora One">Cantora One</option>-->
<!--    <option value="Capriola">Capriola</option>-->
<!--    <option value="Cardo">Cardo</option>-->
<!--    <option value="Carme">Carme</option>-->
<!--    <option value="Carrois Gothic">Carrois Gothic</option>-->
<!--    <option value="Carrois Gothic SC">Carrois Gothic SC</option>-->
<!--    <option value="Carter One">Carter One</option>-->
<!--    <option value="Caudex">Caudex</option>-->
<!--    <option value="Cedarville Cursive">Cedarville Cursive</option>-->
<!--    <option value="Ceviche One">Ceviche One</option>-->
<!--    <option value="Changa One">Changa One</option>-->
<!--    <option value="Chango">Chango</option>-->
<!--    <option value="Chau Philomene One">Chau Philomene One</option>-->
<!--    <option value="Chela One">Chela One</option>-->
<!--    <option value="Chelsea Market">Chelsea Market</option>-->
<!--    <option value="Chenla">Chenla</option>-->
<!--    <option value="Cherry Cream Soda">Cherry Cream Soda</option>-->
<!--    <option value="Cherry Swash">Cherry Swash</option>-->
<!--    <option value="Chewy">Chewy</option>-->
<!--    <option value="Chicle">Chicle</option>-->
<!--    <option value="Chivo">Chivo</option>-->
<!--    <option value="Cinzel">Cinzel</option>-->
<!--    <option value="Cinzel Decorative">Cinzel Decorative</option>-->
<!--    <option value="Clicker Script">Clicker Script</option>-->
<!--    <option value="Coda">Coda</option>-->
<!--    <option value="Coda Caption:800">Coda Caption:800</option>-->
<!--    <option value="Codystar">Codystar</option>-->
<!--    <option value="Combo">Combo</option>-->
<!--    <option value="Comfortaa">Comfortaa</option>-->
<!--    <option value="Coming Soon">Coming Soon</option>-->
<!--    <option value="Concert One">Concert One</option>-->
<!--    <option value="Condiment">Condiment</option>-->
<!--    <option value="Content">Content</option>-->
<!--    <option value="Contrail One">Contrail One</option>-->
<!--    <option value="Convergence">Convergence</option>-->
<!--    <option value="Cookie">Cookie</option>-->
<!--    <option value="Copse">Copse</option>-->
<!--    <option value="Corben">Corben</option>-->
<!--    <option value="Courgette">Courgette</option>-->
<!--    <option value="Cousine">Cousine</option>-->
<!--    <option value="Coustard">Coustard</option>-->
<!--    <option value="Covered By Your Grace">Covered By Your Grace</option>-->
<!--    <option value="Crafty Girls">Crafty Girls</option>-->
<!--    <option value="Creepster">Creepster</option>-->
<!--    <option value="Crete Round">Crete Round</option>-->
<!--    <option value="Crimson Text">Crimson Text</option>-->
<!--    <option value="Croissant One">Croissant One</option>-->
<!--    <option value="Crushed">Crushed</option>-->
<!--    <option value="Cuprum">Cuprum</option>-->
<!--    <option value="Cutive">Cutive</option>-->
<!--    <option value="Cutive Mono">Cutive Mono</option>-->
<!--    <option value="Damion">Damion</option>-->
<!--    <option value="Dancing Script">Dancing Script</option>-->
<!--    <option value="Dangrek">Dangrek</option>-->
<!--    <option value="Dawning of a New Day">Dawning of a New Day</option>-->
<!--    <option value="Days One">Days One</option>-->
<!--    <option value="Delius">Delius</option>-->
<!--    <option value="Delius Swash Caps">Delius Swash Caps</option>-->
<!--    <option value="Delius Unicase">Delius Unicase</option>-->
<!--    <option value="Della Respira">Della Respira</option>-->
<!--    <option value="Denk One">Denk One</option>-->
<!--    <option value="Devonshire">Devonshire</option>-->
<!--    <option value="Didact Gothic">Didact Gothic</option>-->
<!--    <option value="Diplomata">Diplomata</option>-->
<!--    <option value="Diplomata SC">Diplomata SC</option>-->
<!--    <option value="Domine">Domine</option>-->
<!--    <option value="Donegal One">Donegal One</option>-->
<!--    <option value="Doppio One">Doppio One</option>-->
<!--    <option value="Dorsa">Dorsa</option>-->
<!--    <option value="Dosis">Dosis</option>-->
<!--    <option value="Dr Sugiyama">Dr Sugiyama</option>-->
<!--    <option value="Droid Sans">Droid Sans</option>-->
<!--    <option value="Droid Sans Mono">Droid Sans Mono</option>-->
<!--    <option value="Droid Serif">Droid Serif</option>-->
<!--    <option value="Duru Sans">Duru Sans</option>-->
<!--    <option value="Dynalight">Dynalight</option>-->
<!--    <option value="EB Garamond">EB Garamond</option>-->
<!--    <option value="Eagle Lake">Eagle Lake</option>-->
<!--    <option value="Eater">Eater</option>-->
<!--    <option value="Economica">Economica</option>-->
<!--    <option value="Electrolize">Electrolize</option>-->
<!--    <option value="Elsie">Elsie</option>-->
<!--    <option value="Elsie Swash Caps">Elsie Swash Caps</option>-->
<!--    <option value="Emblema One">Emblema One</option>-->
<!--    <option value="Emilys Candy">Emilys Candy</option>-->
<!--    <option value="Engagement">Engagement</option>-->
<!--    <option value="Englebert">Englebert</option>-->
<!--    <option value="Enriqueta">Enriqueta</option>-->
<!--    <option value="Erica One">Erica One</option>-->
<!--    <option value="Esteban">Esteban</option>-->
<!--    <option value="Euphoria Script">Euphoria Script</option>-->
<!--    <option value="Ewert">Ewert</option>-->
<!--    <option value="Exo">Exo</option>-->
<!--    <option value="Expletus Sans">Expletus Sans</option>-->
<!--    <option value="Fanwood Text">Fanwood Text</option>-->
<!--    <option value="Fascinate">Fascinate</option>-->
<!--    <option value="Fascinate Inline">Fascinate Inline</option>-->
<!--    <option value="Faster One">Faster One</option>-->
<!--    <option value="Fasthand">Fasthand</option>-->
<!--    <option value="Fauna One">Fauna One</option>-->
<!--    <option value="Federant">Federant</option>-->
<!--    <option value="Federo">Federo</option>-->
<!--    <option value="Felipa">Felipa</option>-->
<!--    <option value="Fenix">Fenix</option>-->
<!--    <option value="Finger Paint">Finger Paint</option>-->
<!--    <option value="Fjalla One">Fjalla One</option>-->
<!--    <option value="Fjord One">Fjord One</option>-->
<!--    <option value="Flamenco">Flamenco</option>-->
<!--    <option value="Flavors">Flavors</option>-->
<!--    <option value="Fondamento">Fondamento</option>-->
<!--    <option value="Fontdiner Swanky">Fontdiner Swanky</option>-->
<!--    <option value="Forum">Forum</option>-->
<!--    <option value="Francois One">Francois One</option>-->
<!--    <option value="Freckle Face">Freckle Face</option>-->
<!--    <option value="Fredericka the Great">Fredericka the Great</option>-->
<!--    <option value="Fredoka One">Fredoka One</option>-->
<!--    <option value="Freehand">Freehand</option>-->
<!--    <option value="Fresca">Fresca</option>-->
<!--    <option value="Frijole">Frijole</option>-->
<!--    <option value="Fruktur">Fruktur</option>-->
<!--    <option value="Fugaz One">Fugaz One</option>-->
<!--    <option value="GFS Didot">GFS Didot</option>-->
<!--    <option value="GFS Neohellenic">GFS Neohellenic</option>-->
<!--    <option value="Gabriela">Gabriela</option>-->
<!--    <option value="Gafata">Gafata</option>-->
<!--    <option value="Galdeano">Galdeano</option>-->
<!--    <option value="Galindo">Galindo</option>-->
<!--    <option value="Gentium Basic">Gentium Basic</option>-->
<!--    <option value="Gentium Book Basic">Gentium Book Basic</option>-->
<!--    <option value="Geo">Geo</option>-->
<!--    <option value="Geostar">Geostar</option>-->
<!--    <option value="Geostar Fill">Geostar Fill</option>-->
<!--    <option value="Germania One">Germania One</option>-->
<!--    <option value="Gilda Display">Gilda Display</option>-->
<!--    <option value="Give You Glory">Give You Glory</option>-->
<!--    <option value="Glass Antiqua">Glass Antiqua</option>-->
<!--    <option value="Glegoo">Glegoo</option>-->
<!--    <option value="Gloria Hallelujah">Gloria Hallelujah</option>-->
<!--    <option value="Goblin One">Goblin One</option>-->
<!--    <option value="Gochi Hand">Gochi Hand</option>-->
<!--    <option value="Gorditas">Gorditas</option>-->
<!--    <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>-->
<!--    <option value="Graduate">Graduate</option>-->
<!--    <option value="Grand Hotel">Grand Hotel</option>-->
<!--    <option value="Gravitas One">Gravitas One</option>-->
<!--    <option value="Great Vibes">Great Vibes</option>-->
<!--    <option value="Griffy">Griffy</option>-->
<!--    <option value="Gruppo">Gruppo</option>-->
<!--    <option value="Gudea">Gudea</option>-->
<!--    <option value="Habibi">Habibi</option>-->
<!--    <option value="Hammersmith One">Hammersmith One</option>-->
<!--    <option value="Hanalei">Hanalei</option>-->
<!--    <option value="Hanalei Fill">Hanalei Fill</option>-->
<!--    <option value="Handlee">Handlee</option>-->
<!--    <option value="Hanuman">Hanuman</option>-->
<!--    <option value="Happy Monkey">Happy Monkey</option>-->
<!--    <option value="Headland One">Headland One</option>-->
<!--    <option value="Henny Penny">Henny Penny</option>-->
<!--    <option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>-->
<!--    <option value="Holtwood One SC">Holtwood One SC</option>-->
<!--    <option value="Homemade Apple">Homemade Apple</option>-->
<!--    <option value="Homenaje">Homenaje</option>-->
<!--    <option value="IM Fell DW Pica">IM Fell DW Pica</option>-->
<!--    <option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>-->
<!--    <option value="IM Fell Double Pica">IM Fell Double Pica</option>-->
<!--    <option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>-->
<!--    <option value="IM Fell English">IM Fell English</option>-->
<!--    <option value="IM Fell English SC">IM Fell English SC</option>-->
<!--    <option value="IM Fell French Canon">IM Fell French Canon</option>-->
<!--    <option value="IM Fell French Canon SC">IM Fell French Canon SC</option>-->
<!--    <option value="IM Fell Great Primer">IM Fell Great Primer</option>-->
<!--    <option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>-->
<!--    <option value="Iceberg">Iceberg</option>-->
<!--    <option value="Iceland">Iceland</option>-->
<!--    <option value="Imprima">Imprima</option>-->
<!--    <option value="Inconsolata">Inconsolata</option>-->
<!--    <option value="Inder">Inder</option>-->
<!--    <option value="Indie Flower">Indie Flower</option>-->
<!--    <option value="Inika">Inika</option>-->
<!--    <option value="Irish Grover">Irish Grover</option>-->
<!--    <option value="Istok Web">Istok Web</option>-->
<!--    <option value="Italiana">Italiana</option>-->
<!--    <option value="Italianno">Italianno</option>-->
<!--    <option value="Jacques Francois">Jacques Francois</option>-->
<!--    <option value="Jacques Francois Shadow">Jacques Francois Shadow</option>-->
<!--    <option value="Jim Nightshade">Jim Nightshade</option>-->
<!--    <option value="Jockey One">Jockey One</option>-->
<!--    <option value="Jolly Lodger">Jolly Lodger</option>-->
<!--    <option value="Josefin Sans">Josefin Sans</option>-->
<!--    <option value="Josefin Slab">Josefin Slab</option>-->
<!--    <option value="Joti One">Joti One</option>-->
<!--    <option value="Judson">Judson</option>-->
<!--    <option value="Julee">Julee</option>-->
<!--    <option value="Julius Sans One">Julius Sans One</option>-->
<!--    <option value="Junge">Junge</option>-->
<!--    <option value="Jura">Jura</option>-->
<!--    <option value="Just Another Hand">Just Another Hand</option>-->
<!--    <option value="Just Me Again Down Here">Just Me Again Down Here</option>-->
<!--    <option value="Kameron">Kameron</option>-->
<!--    <option value="Karla">Karla</option>-->
<!--    <option value="Kaushan Script">Kaushan Script</option>-->
<!--    <option value="Kavoon">Kavoon</option>-->
<!--    <option value="Keania One">Keania One</option>-->
<!--    <option value="Kelly Slab">Kelly Slab</option>-->
<!--    <option value="Kenia">Kenia</option>-->
<!--    <option value="Khmer">Khmer</option>-->
<!--    <option value="Kite One">Kite One</option>-->
<!--    <option value="Knewave">Knewave</option>-->
<!--    <option value="Kotta One">Kotta One</option>-->
<!--    <option value="Koulen">Koulen</option>-->
<!--    <option value="Kranky">Kranky</option>-->
<!--    <option value="Kreon">Kreon</option>-->
<!--    <option value="Kristi">Kristi</option>-->
<!--    <option value="Krona One">Krona One</option>-->
<!--    <option value="La Belle Aurore">La Belle Aurore</option>-->
<!--    <option value="Lancelot">Lancelot</option>-->
<!--    <option value="Lato">Lato</option>-->
<!--    <option value="League Script">League Script</option>-->
<!--    <option value="Leckerli One">Leckerli One</option>-->
<!--    <option value="Ledger">Ledger</option>-->
<!--    <option value="Lekton">Lekton</option>-->
<!--    <option value="Lemon">Lemon</option>-->
<!--    <option value="Libre Baskerville">Libre Baskerville</option>-->
<!--    <option value="Life Savers">Life Savers</option>-->
<!--    <option value="Lilita One">Lilita One</option>-->
<!--    <option value="Lily Script One">Lily Script One</option>-->
<!--    <option value="Limelight">Limelight</option>-->
<!--    <option value="Linden Hill">Linden Hill</option>-->
<!--    <option value="Lobster">Lobster</option>-->
<!--    <option value="Lobster Two">Lobster Two</option>-->
<!--    <option value="Londrina Outline">Londrina Outline</option>-->
<!--    <option value="Londrina Shadow">Londrina Shadow</option>-->
<!--    <option value="Londrina Sketch">Londrina Sketch</option>-->
<!--    <option value="Londrina Solid">Londrina Solid</option>-->
<!--    <option value="Lora">Lora</option>-->
<!--    <option value="Love Ya Like A Sister">Love Ya Like A Sister</option>-->
<!--    <option value="Loved by the King">Loved by the King</option>-->
<!--    <option value="Lovers Quarrel">Lovers Quarrel</option>-->
<!--    <option value="Luckiest Guy">Luckiest Guy</option>-->
<!--    <option value="Lusitana">Lusitana</option>-->
<!--    <option value="Lustria">Lustria</option>-->
<!--    <option value="Macondo">Macondo</option>-->
<!--    <option value="Macondo Swash Caps">Macondo Swash Caps</option>-->
<!--    <option value="Magra">Magra</option>-->
<!--    <option value="Maiden Orange">Maiden Orange</option>-->
<!--    <option value="Mako">Mako</option>-->
<!--    <option value="Marcellus">Marcellus</option>-->
<!--    <option value="Marcellus SC">Marcellus SC</option>-->
<!--    <option value="Marck Script">Marck Script</option>-->
<!--    <option value="Margarine">Margarine</option>-->
<!--    <option value="Marko One">Marko One</option>-->
<!--    <option value="Marmelad">Marmelad</option>-->
<!--    <option value="Marvel">Marvel</option>-->
<!--    <option value="Mate">Mate</option>-->
<!--    <option value="Mate SC">Mate SC</option>-->
<!--    <option value="Maven Pro">Maven Pro</option>-->
<!--    <option value="McLaren">McLaren</option>-->
<!--    <option value="Meddon">Meddon</option>-->
<!--    <option value="MedievalSharp">MedievalSharp</option>-->
<!--    <option value="Medula One">Medula One</option>-->
<!--    <option value="Megrim">Megrim</option>-->
<!--    <option value="Meie Script">Meie Script</option>-->
<!--    <option value="Merienda">Merienda</option>-->
<!--    <option value="Merienda One">Merienda One</option>-->
<!--    <option value="Merriweather">Merriweather</option>-->
<!--    <option value="Merriweather Sans">Merriweather Sans</option>-->
<!--    <option value="Metal">Metal</option>-->
<!--    <option value="Metal Mania">Metal Mania</option>-->
<!--    <option value="Metamorphous">Metamorphous</option>-->
<!--    <option value="Metrophobic">Metrophobic</option>-->
<!--    <option value="Michroma">Michroma</option>-->
<!--    <option value="Milonga">Milonga</option>-->
<!--    <option value="Miltonian">Miltonian</option>-->
<!--    <option value="Miltonian Tattoo">Miltonian Tattoo</option>-->
<!--    <option value="Miniver">Miniver</option>-->
<!--    <option value="Miss Fajardose">Miss Fajardose</option>-->
<!--    <option value="Modern Antiqua">Modern Antiqua</option>-->
<!--    <option value="Molengo">Molengo</option>-->
<!--    <option value="Molle:italic">Molle:italic</option>-->
<!--    <option value="Monda">Monda</option>-->
<!--    <option value="Monofett">Monofett</option>-->
<!--    <option value="Monoton">Monoton</option>-->
<!--    <option value="Monsieur La Doulaise">Monsieur La Doulaise</option>-->
<!--    <option value="Montaga">Montaga</option>-->
<!--    <option value="Montez">Montez</option>-->
<!--    <option value="Montserrat">Montserrat</option>-->
<!--    <option value="Montserrat Alternates">Montserrat Alternates</option>-->
<!--    <option value="Montserrat Subrayada">Montserrat Subrayada</option>-->
<!--    <option value="Moul">Moul</option>-->
<!--    <option value="Moulpali">Moulpali</option>-->
<!--    <option value="Mountains of Christmas">Mountains of Christmas</option>-->
<!--    <option value="Mouse Memoirs">Mouse Memoirs</option>-->
<!--    <option value="Mr Bedfort">Mr Bedfort</option>-->
<!--    <option value="Mr Dafoe">Mr Dafoe</option>-->
<!--    <option value="Mr De Haviland">Mr De Haviland</option>-->
<!--    <option value="Mrs Saint Delafield">Mrs Saint Delafield</option>-->
<!--    <option value="Mrs Sheppards">Mrs Sheppards</option>-->
<!--    <option value="Muli">Muli</option>-->
<!--    <option value="Mystery Quest">Mystery Quest</option>-->
<!--    <option value="Neucha">Neucha</option>-->
<!--    <option value="Neuton">Neuton</option>-->
<!--    <option value="New Rocker">New Rocker</option>-->
<!--    <option value="News Cycle">News Cycle</option>-->
<!--    <option value="Niconne">Niconne</option>-->
<!--    <option value="Nixie One">Nixie One</option>-->
<!--    <option value="Nobile">Nobile</option>-->
<!--    <option value="Nokora">Nokora</option>-->
<!--    <option value="Norican">Norican</option>-->
<!--    <option value="Nosifer">Nosifer</option>-->
<!--    <option value="Nothing You Could Do">Nothing You Could Do</option>-->
<!--    <option value="Noticia Text">Noticia Text</option>-->
<!--    <option value="Noto Sans">Noto Sans</option>-->
<!--    <option value="Noto Serif">Noto Serif</option>-->
<!--    <option value="Nova Cut">Nova Cut</option>-->
<!--    <option value="Nova Flat">Nova Flat</option>-->
<!--    <option value="Nova Mono">Nova Mono</option>-->
<!--    <option value="Nova Oval">Nova Oval</option>-->
<!--    <option value="Nova Round">Nova Round</option>-->
<!--    <option value="Nova Script">Nova Script</option>-->
<!--    <option value="Nova Slim">Nova Slim</option>-->
<!--    <option value="Nova Square">Nova Square</option>-->
<!--    <option value="Numans">Numans</option>-->
<!--    <option value="Nunito">Nunito</option>-->
<!--    <option value="Odor Mean Chey">Odor Mean Chey</option>-->
<!--    <option value="Offside">Offside</option>-->
<!--    <option value="Old Standard TT">Old Standard TT</option>-->
<!--    <option value="Oldenburg">Oldenburg</option>-->
<!--    <option value="Oleo Script">Oleo Script</option>-->
<!--    <option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>-->
<!--    <option value="Open Sans">Open Sans</option>-->
<!--    <option value="Open Sans Condensed:300">Open Sans Condensed:300</option>-->
<!--    <option value="Open Sans Condensed:300italic">Open Sans Condensed:300italic</option>-->
<!--    <option value="Open Sans Condensed:700">Open Sans Condensed:700</option>-->
<!--    <option value="Oranienbaum">Oranienbaum</option>-->
<!--    <option value="Orbitron">Orbitron</option>-->
<!--    <option value="Oregano">Oregano</option>-->
<!--    <option value="Orienta">Orienta</option>-->
<!--    <option value="Original Surfer">Original Surfer</option>-->
<!--    <option value="Oswald">Oswald</option>-->
<!--    <option value="Over the Rainbow">Over the Rainbow</option>-->
<!--    <option value="Overlock">Overlock</option>-->
<!--    <option value="Overlock SC">Overlock SC</option>-->
<!--    <option value="Ovo">Ovo</option>-->
<!--    <option value="Oxygen">Oxygen</option>-->
<!--    <option value="Oxygen Mono">Oxygen Mono</option>-->
<!--    <option value="PT Mono">PT Mono</option>-->
<!--    <option value="PT Sans">PT Sans</option>-->
<!--    <option value="PT Sans Caption">PT Sans Caption</option>-->
<!--    <option value="PT Sans Narrow">PT Sans Narrow</option>-->
<!--    <option value="PT Serif">PT Serif</option>-->
<!--    <option value="PT Serif Caption">PT Serif Caption</option>-->
<!--    <option value="Pacifico">Pacifico</option>-->
<!--    <option value="Paprika">Paprika</option>-->
<!--    <option value="Parisienne">Parisienne</option>-->
<!--    <option value="Passero One">Passero One</option>-->
<!--    <option value="Passion One">Passion One</option>-->
<!--    <option value="Pathway Gothic One">Pathway Gothic One</option>-->
<!--    <option value="Patrick Hand">Patrick Hand</option>-->
<!--    <option value="Patrick Hand SC">Patrick Hand SC</option>-->
<!--    <option value="Patua One">Patua One</option>-->
<!--    <option value="Paytone One">Paytone One</option>-->
<!--    <option value="Peralta">Peralta</option>-->
<!--    <option value="Permanent Marker">Permanent Marker</option>-->
<!--    <option value="Petit Formal Script">Petit Formal Script</option>-->
<!--    <option value="Petrona">Petrona</option>-->
<!--    <option value="Philosopher">Philosopher</option>-->
<!--    <option value="Piedra">Piedra</option>-->
<!--    <option value="Pinyon Script">Pinyon Script</option>-->
<!--    <option value="Pirata One">Pirata One</option>-->
<!--    <option value="Plaster">Plaster</option>-->
<!--    <option value="Play" selected='selected'>Play</option>-->
<!--    <option value="Playball">Playball</option>-->
<!--    <option value="Playfair Display">Playfair Display</option>-->
<!--    <option value="Playfair Display SC">Playfair Display SC</option>-->
<!--    <option value="Podkova">Podkova</option>-->
<!--    <option value="Poiret One">Poiret One</option>-->
<!--    <option value="Poller One">Poller One</option>-->
<!--    <option value="Poly">Poly</option>-->
<!--    <option value="Pompiere">Pompiere</option>-->
<!--    <option value="Pontano Sans">Pontano Sans</option>-->
<!--    <option value="Port Lligat Sans">Port Lligat Sans</option>-->
<!--    <option value="Port Lligat Slab">Port Lligat Slab</option>-->
<!--    <option value="Prata">Prata</option>-->
<!--    <option value="Preahvihear">Preahvihear</option>-->
<!--    <option value="Press Start 2P">Press Start 2P</option>-->
<!--    <option value="Princess Sofia">Princess Sofia</option>-->
<!--    <option value="Prociono">Prociono</option>-->
<!--    <option value="Prosto One">Prosto One</option>-->
<!--    <option value="Puritan">Puritan</option>-->
<!--    <option value="Purple Purse">Purple Purse</option>-->
<!--    <option value="Quando">Quando</option>-->
<!--    <option value="Quantico">Quantico</option>-->
<!--    <option value="Quattrocento">Quattrocento</option>-->
<!--    <option value="Quattrocento Sans">Quattrocento Sans</option>-->
<!--    <option value="Questrial">Questrial</option>-->
<!--    <option value="Quicksand">Quicksand</option>-->
<!--    <option value="Quintessential">Quintessential</option>-->
<!--    <option value="Qwigley">Qwigley</option>-->
<!--    <option value="Racing Sans One">Racing Sans One</option>-->
<!--    <option value="Radley">Radley</option>-->
<!--    <option value="Raleway">Raleway</option>-->
<!--    <option value="Raleway Dots">Raleway Dots</option>-->
<!--    <option value="Rambla">Rambla</option>-->
<!--    <option value="Rammetto One">Rammetto One</option>-->
<!--    <option value="Ranchers">Ranchers</option>-->
<!--    <option value="Rancho">Rancho</option>-->
<!--    <option value="Rationale">Rationale</option>-->
<!--    <option value="Redressed">Redressed</option>-->
<!--    <option value="Reenie Beanie">Reenie Beanie</option>-->
<!--    <option value="Revalia">Revalia</option>-->
<!--    <option value="Ribeye">Ribeye</option>-->
<!--    <option value="Ribeye Marrow">Ribeye Marrow</option>-->
<!--    <option value="Righteous">Righteous</option>-->
<!--    <option value="Risque">Risque</option>-->
<!--    <option value="Roboto">Roboto</option>-->
<!--    <option value="Roboto Condensed">Roboto Condensed</option>-->
<!--    <option value="Roboto Slab">Roboto Slab</option>-->
<!--    <option value="Rochester">Rochester</option>-->
<!--    <option value="Rock Salt">Rock Salt</option>-->
<!--    <option value="Rokkitt">Rokkitt</option>-->
<!--    <option value="Romanesco">Romanesco</option>-->
<!--    <option value="Ropa Sans">Ropa Sans</option>-->
<!--    <option value="Rosario">Rosario</option>-->
<!--    <option value="Rosarivo">Rosarivo</option>-->
<!--    <option value="Rouge Script">Rouge Script</option>-->
<!--    <option value="Ruda">Ruda</option>-->
<!--    <option value="Rufina">Rufina</option>-->
<!--    <option value="Ruge Boogie">Ruge Boogie</option>-->
<!--    <option value="Ruluko">Ruluko</option>-->
<!--    <option value="Rum Raisin">Rum Raisin</option>-->
<!--    <option value="Ruslan Display">Ruslan Display</option>-->
<!--    <option value="Russo One">Russo One</option>-->
<!--    <option value="Ruthie">Ruthie</option>-->
<!--    <option value="Rye">Rye</option>-->
<!--    <option value="Sacramento">Sacramento</option>-->
<!--    <option value="Sail">Sail</option>-->
<!--    <option value="Salsa">Salsa</option>-->
<!--    <option value="Sanchez">Sanchez</option>-->
<!--    <option value="Sancreek">Sancreek</option>-->
<!--    <option value="Sansita One">Sansita One</option>-->
<!--    <option value="Sarina">Sarina</option>-->
<!--    <option value="Satisfy">Satisfy</option>-->
<!--    <option value="Scada">Scada</option>-->
<!--    <option value="Schoolbell">Schoolbell</option>-->
<!--    <option value="Seaweed Script">Seaweed Script</option>-->
<!--    <option value="Sevillana">Sevillana</option>-->
<!--    <option value="Seymour One">Seymour One</option>-->
<!--    <option value="Shadows Into Light">Shadows Into Light</option>-->
<!--    <option value="Shadows Into Light Two">Shadows Into Light Two</option>-->
<!--    <option value="Shanti">Shanti</option>-->
<!--    <option value="Share">Share</option>-->
<!--    <option value="Share Tech">Share Tech</option>-->
<!--    <option value="Share Tech Mono">Share Tech Mono</option>-->
<!--    <option value="Shojumaru">Shojumaru</option>-->
<!--    <option value="Short Stack">Short Stack</option>-->
<!--    <option value="Siemreap">Siemreap</option>-->
<!--    <option value="Sigmar One">Sigmar One</option>-->
<!--    <option value="Signika">Signika</option>-->
<!--    <option value="Signika Negative">Signika Negative</option>-->
<!--    <option value="Simonetta">Simonetta</option>-->
<!--    <option value="Sintony">Sintony</option>-->
<!--    <option value="Sirin Stencil">Sirin Stencil</option>-->
<!--    <option value="Six Caps">Six Caps</option>-->
<!--    <option value="Skranji">Skranji</option>-->
<!--    <option value="Slackey">Slackey</option>-->
<!--    <option value="Smokum">Smokum</option>-->
<!--    <option value="Smythe">Smythe</option>-->
<!--    <option value="Sniglet:800">Sniglet:800</option>-->
<!--    <option value="Snippet">Snippet</option>-->
<!--    <option value="Snowburst One">Snowburst One</option>-->
<!--    <option value="Sofadi One">Sofadi One</option>-->
<!--    <option value="Sofia">Sofia</option>-->
<!--    <option value="Sonsie One">Sonsie One</option>-->
<!--    <option value="Sorts Mill Goudy">Sorts Mill Goudy</option>-->
<!--    <option value="Source Code Pro">Source Code Pro</option>-->
<!--    <option value="Source Sans Pro">Source Sans Pro</option>-->
<!--    <option value="Special Elite">Special Elite</option>-->
<!--    <option value="Spicy Rice">Spicy Rice</option>-->
<!--    <option value="Spinnaker">Spinnaker</option>-->
<!--    <option value="Spirax">Spirax</option>-->
<!--    <option value="Squada One">Squada One</option>-->
<!--    <option value="Stalemate">Stalemate</option>-->
<!--    <option value="Stalinist One">Stalinist One</option>-->
<!--    <option value="Stardos Stencil">Stardos Stencil</option>-->
<!--    <option value="Stint Ultra Condensed">Stint Ultra Condensed</option>-->
<!--    <option value="Stint Ultra Expanded">Stint Ultra Expanded</option>-->
<!--    <option value="Stoke">Stoke</option>-->
<!--    <option value="Strait">Strait</option>-->
<!--    <option value="Sue Ellen Francisco">Sue Ellen Francisco</option>-->
<!--    <option value="Sunshiney">Sunshiney</option>-->
<!--    <option value="Supermercado One">Supermercado One</option>-->
<!--    <option value="Suwannaphum">Suwannaphum</option>-->
<!--    <option value="Swanky and Moo Moo">Swanky and Moo Moo</option>-->
<!--    <option value="Syncopate">Syncopate</option>-->
<!--    <option value="Tangerine">Tangerine</option>-->
<!--    <option value="Taprom">Taprom</option>-->
<!--    <option value="Tauri">Tauri</option>-->
<!--    <option value="Telex">Telex</option>-->
<!--    <option value="Tenor Sans">Tenor Sans</option>-->
<!--    <option value="Text Me One">Text Me One</option>-->
<!--    <option value="The Girl Next Door">The Girl Next Door</option>-->
<!--    <option value="Tienne">Tienne</option>-->
<!--    <option value="Tinos">Tinos</option>-->
<!--    <option value="Titan One">Titan One</option>-->
<!--    <option value="Titillium Web">Titillium Web</option>-->
<!--    <option value="Trade Winds">Trade Winds</option>-->
<!--    <option value="Trocchi">Trocchi</option>-->
<!--    <option value="Trochut">Trochut</option>-->
<!--    <option value="Trykker">Trykker</option>-->
<!--    <option value="Tulpen One">Tulpen One</option>-->
<!--    <option value="Ubuntu">Ubuntu</option>-->
<!--    <option value="Ubuntu Condensed">Ubuntu Condensed</option>-->
<!--    <option value="Ubuntu Mono">Ubuntu Mono</option>-->
<!--    <option value="Ultra">Ultra</option>-->
<!--    <option value="Uncial Antiqua">Uncial Antiqua</option>-->
<!--    <option value="Underdog">Underdog</option>-->
<!--    <option value="Unica One">Unica One</option>-->
<!--    <option value="UnifrakturCook:700">UnifrakturCook:700</option>-->
<!--    <option value="UnifrakturMaguntia">UnifrakturMaguntia</option>-->
<!--    <option value="Unkempt">Unkempt</option>-->
<!--    <option value="Unlock">Unlock</option>-->
<!--    <option value="Unna">Unna</option>-->
<!--    <option value="VT323">VT323</option>-->
<!--    <option value="Vampiro One">Vampiro One</option>-->
<!--    <option value="Varela">Varela</option>-->
<!--    <option value="Varela Round">Varela Round</option>-->
<!--    <option value="Vast Shadow">Vast Shadow</option>-->
<!--    <option value="Vibur">Vibur</option>-->
<!--    <option value="Vidaloka">Vidaloka</option>-->
<!--    <option value="Viga">Viga</option>-->
<!--    <option value="Voces">Voces</option>-->
<!--    <option value="Volkhov">Volkhov</option>-->
<!--    <option value="Vollkorn">Vollkorn</option>-->
<!--    <option value="Voltaire">Voltaire</option>-->
<!--    <option value="Waiting for the Sunrise">Waiting for the Sunrise</option>-->
<!--    <option value="Wallpoet">Wallpoet</option>-->
<!--    <option value="Walter Turncoat">Walter Turncoat</option>-->
<!--    <option value="Warnes">Warnes</option>-->
<!--    <option value="Wellfleet">Wellfleet</option>-->
<!--    <option value="Wendy One">Wendy One</option>-->
<!--    <option value="Wire One">Wire One</option>-->
<!--    <option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>-->
<!--    <option value="Yellowtail">Yellowtail</option>-->
<!--    <option value="Yeseva One">Yeseva One</option>-->
<!--    <option value="Yesteryear">Yesteryear</option>-->
<!--    <option value="Zeyada">Zeyada</option>-->
<!--    </select>-->
<!---->
<!--    <input type="hidden" name="cufon-folder" id="cufon-folder" value="http://demo.yithemes.com/bazar/wp-content/themes/bazar/fonts"/>-->
<!--  </div>-->
<!--</div>-->
<!--</div>-->

    <script type="text/javascript">
        jQuery(document).ready(function($){

            /** Check Cookie */
            var access_cookie = ( $.cookie('yit-popup-access-bazar-shop') == null ) ? false : $.cookie('yit-popup-access-bazar-shop');
            var noview_cookie = ( $.cookie('yit-popup-bazar-shop') == null ) ? false : $.cookie('yit-popup-bazar-shop');
            if ( !access_cookie && !noview_cookie ) {
                $('.popupWrap').center();
                $('.popupOverlay').css( { display: 'block', opacity:0 } ).animate( { opacity:0.7 }, 500 );
                $('.popupWrap').css( { display: 'block', opacity:0 } ).animate( { opacity:1 }, 500 );

                /** Close popup function **/
                var close_popup = function() {
                    if ( $('.no-view').is(':checked') ) {
                        $.cookie( 'yit-popup-bazar-shop', 1, { expires: 365, path: '/' } );
                    }

                    $.cookie( 'yit-popup-access-bazar-shop', 1, { path: '/' } );

                    $('.popupOverlay').animate( {opacity:0}, 200);
                    $('.popupOverlay').remove();
                    $('.popupWrap').animate( {opacity:0}, 200);
                    $('.popupWrap').remove();
                }

                /**
                 *	Close popup on:
                 *	- 'X button' click
                 *   - wrapper click
                 *   - esc key pressed
                 **/
                $('.close-popup').click(function(){
                    close_popup();
                });

                $(document).bind('keydown', function(e) {
                    if (e.which == 27) {
                        if($('.popupOverlay')) {
                            close_popup();
                        }
                    }
                });

                $('.popupOverlay').click(function(){
                    close_popup();
                });

                $('.submit-field').parents('form').on( 'submit', function(){
                    $.cookie( 'yit-popup-bazar-shop', 1, { expires: 365, path: '/' } );
                });

                /** Center popup on windows resize **/
                $(window).resize(function(){
                    $('#popupWrap').center();
                });
            }
        });
    </script>


    <?php print "<link rel='stylesheet' id='yith_wcan_admin-css'  href='". base_path().path_to_theme() ."/css/frontend.css' type='text/css' media='all' />";?>

    <script type='text/javascript'>
        /* <![CDATA[ */

        <?php echo "\n".$bazarJsConfigButtom."\n";?>
    /* ]]> */
</script>

<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/wp-includes/thickbox.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/wp-includes/underscore.min.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/wp-includes/shortcode.min.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/media.upload.min.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.commonlibraries.js?v=2'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.layout.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.custom.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.yith-wcwl.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/twitter-text.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.cycle.min.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/core/shortcodes.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/shortcodes.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/widgets.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jq-cookie.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/woocommerce.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/add-to-cart.min.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/woocommerce/jquery.blockUI.min.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/woocompare.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.colorbox-min.js'></script>";?>
<?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/responsive.js'></script>";?>


<?php foreach($bazarJsButtom as $key => $js_class){
    if($js_class['external']){
        echo '<script src="'.$js_class['url'].'"></script>';
    }else{
        echo '<script src="'.base_path().path_to_theme().$js_class['url'].'"></script>'."\n";
    }
}?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/woocommerce.min.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/cart-fragments.min.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.placeholder.min.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/changer-bazar.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/yith-wcan-frontend.min.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.eislideshow.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.carouFredSel-6.1.0-packed.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.touchSwipe.min.js'></script>";?>
    <?php //print "<script type='text/javascript' src='". base_path().path_to_theme() ."/js/jquery/jquery.mousewheel.min.js'></script>";?>

<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"rpm-images.newrelic.com/42/eum/rum.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-2.newrelic.com","8f2469d0fb","2138010","ZARXMEoHXkNQBUZRDF1OdAdMD19eHhZTXwY=",0,1299,new Date().getTime(),"","","","",""]);</script>
</body>
</html>
