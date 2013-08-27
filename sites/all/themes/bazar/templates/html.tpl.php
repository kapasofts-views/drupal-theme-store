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
  <?php print render($region['driver_configurations']);  ?>
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

    <?php print "<link rel='stylesheet' id='yith_wcan_admin-css'  href='". base_path().path_to_theme() ."/css/frontend.css' type='text/css' media='all' />";?>

    <script type='text/javascript'>
        /* <![CDATA[ */

        <?php echo "\n".$bazarJsConfigButtom."\n";?>
    /* ]]> */
</script>

<?php foreach($bazarJsButtom as $key => $js_class){
    if($js_class['external']){
        echo '<script src="'.$js_class['url'].'"></script>';
    }else{
        echo '<script src="'.base_path().path_to_theme().$js_class['url'].'"></script>'."\n";
    }
}?>

<!--<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"rpm-images.newrelic.com/42/eum/rum.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-2.newrelic.com","8f2469d0fb","2138010","ZARXMEoHXkNQBUZRDF1OdAdMD19eHhZTXwY=",0,1299,new Date().getTime(),"","","","",""]);</script>-->
</body>
</html>
