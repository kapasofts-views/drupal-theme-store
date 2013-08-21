
<!--<script type="text/javascript">-->
<!--    var yith_wcwl_plugin_ajax_web_url = 'http://demo.yithemes.com/bazar/wp-admin/admin-ajax.php';-->
<!--    var login_redirect_url= 'http://demo.yithemes.com/bazar/wp-login.php?redirect_to=%2Fbazar%2Fshop%2Fwalking-shoes%2F';-->
<!--</script>-->


<div id="page-meta" class="group margin-top">
    <div class="container">
        <div class="row">
            <div class="span12">

                <!-- BREDCRUMB -->
                <div class="breadcrumbs">
                </div>

            </div></div></div>
</div>
<!-- END PAGE META -->
<!--<div class="main-container container">-->
<!--  <div class="row">-->

<div id="primary" class="sidebar-right">
<div class="container group">
<div class="row">

    <!-- START PAGE META -->
    <div id="page-meta" class="group span12">
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
    </div>
    <!-- END PAGE META -->

      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
    <!-- START CONTENT -->
<div id="content-shop" class="span9 content group">
      <?php print $messages; ?>
      <?php print render($page['content']); ?>
</div><!-- END CONTENT-->

    <?php if (!empty($page['sidebar_second'])): ?>
        <?php print render($page['sidebar_second']); ?>
    <?php endif; ?>


</div><!--End of Row-->
  </div><!--End of container group -->
</div><!-- primary-->

<!--  </div>-->
<!--</div>-->

<!--<script type="text/javascript">-->
<!--    var yith_wcwl_plugin_ajax_web_url = 'http://demo.yithemes.com/bazar/wp-admin/admin-ajax.php';-->
<!--    var login_redirect_url= 'http://demo.yithemes.com/bazar/wp-login.php?redirect_to=%2Fbazar%2Fshop%2Fwalking-shoes%2F';-->
<!--</script>-->

