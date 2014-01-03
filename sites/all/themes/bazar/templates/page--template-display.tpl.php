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
      <?php print render($page['page_headline']); ?>
      <?php print render($page['content']); ?>
</div><!-- END CONTENT-->
    <?php if (!empty($page['sidebar_second'])): ?>
        <?php print render($page['sidebar_second']); ?>
    <?php endif; ?>
</div><!--End of Row-->
  </div><!--End of container group -->
</div><!-- primary-->





