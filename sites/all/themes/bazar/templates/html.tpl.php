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
  <?php echo '<meta name="description" content="'.$page_seo['desc'].'"/>';?>
  <?php echo '<meta name="keywords" content="'.$page_seo['keywords'].'"/>';?>
    <?php print $head; ?>
  <?php print render($region['driver_configurations']);  ?>
  <script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
  <?php echo '<title>'.$page_seo['title'].'</title>';?>
   <script language="javascript">
        var yit_responsive_menu_type = "arrow";
        var yit_responsive_menu_text = "NAVIGATE TO...";
    </script>
    <!-- For iPad3 with retina display: -->
    <?php print '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'. base_path().path_to_theme() .'/img/buy-web-designs-touch-icon.png" />';?>
    <!-- For first- and second-generation iPad: -->
    <?php print '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'. base_path().path_to_theme() .'/img/content-management-system-website-templates-114.png" />';?>
    <!-- For first- and second-generation iPad: -->
    <?php print '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'. base_path().path_to_theme() .'/img/professional-design-templates.png">';?>
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <?php print '<link rel="apple-touch-icon-precomposed" href="'. base_path().path_to_theme() .'/img/premium-templates-for-website.png" />';?>

    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2' type='text/css' media='all' />
    <?php print $styles; ?>
    <?php print $scripts; ?>

    <script type="text/javascript">var icl_lang = 'en';var icl_home = 'http://designssquare.com/';</script>
</head>
<?php echo '<body class="'.$bazarCssBodyTag.'">'; ?>

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

<?php foreach($bazarJsButtom as $key => $js_class){
        echo '<script src="'.base_path().path_to_theme().$js_class['url'].'"></script>'."\n";
}?>
</body>
</html>
