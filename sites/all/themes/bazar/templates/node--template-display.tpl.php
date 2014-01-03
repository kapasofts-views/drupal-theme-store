<div itemscope itemtype="http://schema.org/Product" id="product-506" class=" product type-product status-publish hentry sale instock">
        <div class="row">
            <div class="images">
                <?php print '<a itemprop="image" href="'.$bazar_product['img-magnified']['url'].'" class="yith_magnifier_zoom" rel="thumbnails">';?>
                <?php print '<img src="'.$bazar_product['img']['url'].'" alt="'.$bazar_product['img']['alt'].'" class="yit-image refresh-main-img attachment-shop_single" width="462" height="392" />';?>
                </a>
                <?php if($bazar_product['is-on-sale']){print '<img src="'.base_path().path_to_theme() .'/img/responsive-themes-sale.png" alt="drupal responsive themes On sale!" class="onsale yit-image" width="71" height="68" />';}?>
                <?php if($bazar_product['is-new-product']){print '<img src="'.base_path().path_to_theme() .'/img/premium-drupal-7-themes-new.png" alt="best drupal 7 themes New Product!" class="new-prod yit-image" width="71" height="68" />';}?>
                <div class="thumbnails">
                    <div id="slider-prev"></div>
                    <div id="slider-next"></div>
                </div>
            </div>
           <?php print '<script charset="utf-8" src="'.base_path().path_to_theme().'/js/single-product-display-magnifier.js"></script>';?>
            <div class="summary entry-summary">
                <?php print '<h1 itemprop="name" class="product_title entry-title">'.$bazar_product['title'].'</h1>';?>
                <div class="border borderstrong"></div>
                <div class="border"></div>
                <div class="border"></div>
                <div class="border"></div>
                <div itemprop="description" class="product-description">
                    <a href="#packageModal" role="button" data-toggle="modal"><i id="description-info-sign" class="icon-info-sign"></i></a>
                    <?php print render($region['select_product_form']); ?>
                    <?php print '<p><span class="posted_in">Responsive Theme:</span> <span class="mobile-support"><a href="'.$current_url.'" rel="tag">'.$bazar_product['mobile_support'].'</a></span></p>';?>
                    <?php print '<p><span class="posted_in">Design Framework:</span> <span class="prod-design-framework"><a href="#" rel="tag">'.$bazar_product['design_framework'].'</a></span></p>';?>
                    <?php
                    $output_c = '<p class="prod-category"><span class="posted_in">Category:</span><ul class="unstyled prod-cat-refresh">';
                    foreach($bazar_product['category'] as $key=>$val){
                        $output_c .= '<li><a href="'.$current_url.'" rel="tag">'.$val.'</a></li>';
                    }
                    $output_c .= '</ul></p>';
                    print $output_c;
                    ?>
                </div>
                <div id="packageModal" class="package-modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true" >×</button>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <?php print '<h3 id="myModalLabel">'.$bazar_product['title'].'</h3>';?>
                    </div>
                    <div class="modal-body-package modal-body ">
                        <div class="media">
                            <div class="pull-left media-img-alter basic-label">
                                <?php //print '<img class="media-object" src="'.base_path().path_to_theme() .'/img/drupal-7-themes-basic.png" alt="drupal theme">';?>
                            </div>
                            <div class="media-body">
                                The minimal to get it started. Each page is its own content type, however. It my require some html, coding skills to customize per your needs. Perfect for developers focusing on building features!
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left media-img-alter plus-label">
                                <?php //print '<img class="media-object" src="'.base_path().path_to_theme() .'/img/drupal-responsive-theme-plus.png" alt="drupal mobile theme" >';?>
                            </div>
                            <div class="media-body ">
                                All design elements are contained in their own container configurable and editable by anyone, so you don't need any html or coding skills. Do your self package!
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left media-img-alter ultimate-label">
                                <?php //print '<img class="media-object" src="'.base_path().path_to_theme() .'/img/drupal-premium-themes-ultimate.png" alt="professional design templates">';?>
                            </div>
                            <div class="media-body">
                                Sit back, relax and sip your favorite drink, while we install, configure and customize your site as you wish(up to 3h of our time). The smart choice package!
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn pull-left" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
                <div class="product_meta">
                   <a href="#myModal" role="button" id="start-demo" class="button alt" >Launch Demo</a>
                    <!-- Modal -->
                    <div id="myModal" class="modal demoModal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true" >×</button>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <?php print '<h3 id="myModalLabel">'.$bazar_product['title'].'</h3>';?>
                        </div>
                        <script>
                            <?php print 'var demoUrl = "'.$bazar_product['demo_url'].'";';?>
                        </script>
                        <div class="modal-body-demo modal-body">
                            <?php print '<iframe id="demo-frame" src="" class="'.$bazar_product['hide_demo_header'].'" height="2000" width="1400" scrolling="no" frameborder="0" seamless></iframe>';?>
                        </div>
                        <div class="modal-footer">
                            <button class="btn pull-left" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End of Content-->

  <div class="product-extra span9">

  <div class="woocommerce-tabs">
      <ul class="tabs">
          <li class="description_tab">
              <a href="#tab-description">Description</a>
          </li>
          <li class="info_tab">
              <a href="#tab-info">Product Inquiry</a>
          </li>
          <li class="reviews_tab">
              <a href="#tab-reviews">Reviews (0)</a>
          </li>
      </ul>
      <div class="panel entry-content" id="tab-description">
            <span class="description-refresh"><?php print $bazar_product['description']; ?></span>
      </div>
      <div class="panel entry-content" id="tab-info">
          <?php
          print render($region['product_inquiry_horizontal']);
          ?>
      </div>
      <div class="panel entry-content" id="tab-reviews">
          <div id="reviews">
              <div id="comments">
                  <h2>Reviews</h2>
                  <p class="noreviews">There are no reviews yet, would you like to
                      <?php echo '<a href="'.$current_url.'" class="inline show_review_form">submit yours</a>?';?>
                  </p>
              </div>
              <div id="review_form_wrapper"><div id="review_form">								<div id="respond">
                         <?php print '<h3 id="reply-title">Be the first to review &ldquo;'.$product_title.'&rdquo; <small>';?>
                                 <?php echo '<a rel="nofollow" id="cancel-comment-reply-link" href="'.$current_url.'" style="display:none;">';?>
                                      Cancel reply
                                  </a>
                              </small>
                          </h3>
                      </div>
                  </div>
              </div>
              <div class="clear"></div>
          </div>
      </div>
  </div>
  <div class="related products">
      <h2>Related Products</h2>
      <?php
//      print render($region[$bazar_product['relative-products']]);
        print render($region['related_products']);
      ?>
      <div class="es-nav">
          <span class="es-nav-prev">Previous</span>
          <span class="es-nav-next">Next</span>
      </div>
      <div class="clear"></div>

  </div>
</div>