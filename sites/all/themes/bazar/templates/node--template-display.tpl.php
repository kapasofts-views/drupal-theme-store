
<!--<div id="content-shop" class="span9 content group">-->
    <div itemscope itemtype="http://schema.org/Product" id="product-506" class="post-506 product type-product status-publish hentry sale instock">

        <div class="row">

            <div class="images">


                <!-- YITH Magnifier Template -->
                <!--<a itemprop="image" href="http://demo.yithemes.com/bazar/files/2013/01/0710-924x784.jpg" class="yith_magnifier_zoom" rel="thumbnails">-->
                <!--<img src="http://demo.yithemes.com/bazar/files/2013/01/0710-462x392.jpg" class="yit-image attachment-shop_single" width="462" height="392" />-->


                <?php print '<a itemprop="image" href="'.$bazar_product['img-magnified']['url'].'" class="yith_magnifier_zoom" rel="thumbnails">';?>
                <?php print '<img src="'.$bazar_product['img']['url'].'" alt="'.$bazar_product['img']['alt'].'" class="yit-image refresh-main-img attachment-shop_single" width="462" height="392" />';?>
                </a>
                <?php if($bazar_product['is-on-sale']){print '<img src="'.base_path().path_to_theme() .'/img/sale.png" alt="On sale!" class="onsale yit-image" width="71" height="68" />';}?>
                <?php if($bazar_product['is-new-product']){print '<img src="'.base_path().path_to_theme() .'/img/new-product.png" alt="New Product!" class="new-prod yit-image" width="71" height="68" />';}?>
                <div class="thumbnails">
                    <div id="slider-prev"></div>
                    <div id="slider-next"></div>
                </div>
            </div>

            <script type="text/javascript" charset="utf-8">
                var yith_magnifier_options = {
                    enableSlider: true,

                    sliderOptions: {
                        responsive: false,
                        //items: ,
                        circular: true,
                        infinite: true,
                        direction: 'left',
                        debug: false,
                        auto: false,
                        align: 'left',
                        prev	: {
                            button	: "#slider-prev",
                            key		: "left"
                        },
                        next	: {
                            button	: "#slider-next",
                            key		: "right"
                        },
                        //width   : 470,
                        scroll : {
                            items     : 1,
                            pauseOnHover: true
                        }
//     	items   : {
//             width: 20
//         }
                    },

                    showTitle: false,
                    zoomWidth: 'auto',
                    zoomHeight: 'auto',
                    position: 'right',
                    tint: false,
                    tintOpacity: 0.5,
                    lensOpacity: 0.5,
                    softFocus: false,
                    smoothMove: 3,
                    adjustY: 0,
                    disableRightClick: false,
                    phoneBehavior: 'inside',
                    loadingLabel: 'Loading...'
                };
            </script>

            <div class="summary entry-summary">


                <?php print '<h1 itemprop="name" class="product_title entry-title">'.$bazar_product['title'].'</h1>';?>
                <div class="border borderstrong"></div>
                <div class="border"></div>
                <div class="border"></div>
                <div class="border"></div>
                <div itemprop="description" class="product-description">
                    <a href="#packageModal" role="button" data-toggle="modal"><i id="description-info-sign" class="icon-info-sign"></i></a>
<!--                    <p>Phasellus egestas, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros.</p>-->
<!--                    <p>Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum.</p>-->
<!--                    <p>Donec nisi est, tempus eget. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget.</p>-->
                    <?php print render($region['select_product_form']); ?>
                    <?php print '<p><span class="posted_in">Mobile Support(responsive):</span> <span class="mobile-support"><a href="#" rel="tag">'.$bazar_product['mobile_support'].'</a></span></p>';?>
                    <?php print '<p><span class="posted_in">Design Framework:</span> <span class="prod-design-framework"><a href="#" rel="tag">'.$bazar_product['design_framework'].'</a></span></p>';?>
                    <?php
                    $output_c = '<p class="prod-category"><span class="posted_in">Category:</span><ul class="unstyled prod-cat-refresh">';
                    foreach($bazar_product['category'] as $key=>$val){
                        $output_c .= '<li><a href="#" rel="tag">'.$val.'</a></li>';
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
                            <a class="pull-left" href="#">
                                <?php print '<img class="media-object" src="'.base_path().path_to_theme() .'/img/basic-icon.png">';?>
                            </a>
                            <div class="media-body">
<!--                                <h4 class="media-heading">Basic</h4>-->
                                The minimal to get it started. Each page is its own content type, however. It my require some html, coding skills to customize per your needs. Perfect for developers focusing on building features!
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <?php print '<img class="media-object" src="'.base_path().path_to_theme() .'/img/plus-icon.png">';?>
                            </a>
                            <div class="media-body">
<!--                                <h4 class="media-heading">Plus</h4>-->
                                All design elements are contained in their own container configurable and editable by anyone, so you don't need any html or coding skills. Do your self package!
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <?php print '<img class="media-object" src="'.base_path().path_to_theme() .'/img/unlimited-icon.png">';?>
                            </a>
                            <div class="media-body">
<!--                                <h4 class="media-heading">Unlimited</h4>-->
                                Sit back, relax and sip your favorite drink, while we install, configure and customize your site as you wish(up to 3h of our time). The smart choice package!
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn pull-left" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
                <div class="product_meta">
                    <!-- Button to trigger modal -->
                    <a href="#myModal" role="button" class="button alt" data-toggle="modal">Launch Demo</a>
                     <!-- Modal -->
                    <div id="myModal" class="modal demoModal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true" >×</button>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <?php print '<h3 id="myModalLabel">'.$bazar_product['title'].'</h3>';?>
                        </div>
                        <div class="modal-body-demo modal-body">
                            <?php print '<iframe src="'.$bazar_product['demo_url'].'" class="'.$bazar_product['hide_demo_header'].'" height="2000" width="1400" scrolling="no" frameborder="0" seamless></iframe>';?>
                        </div>
                        <div class="modal-footer">
                            <button class="btn pull-left" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </div>
                </div>
            </div><!-- .summary -->

        </div>

    </div><!-- #product-506 -->

<!--</div>-->
    <!--End of Content-->

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


<!--          <h2>Product Description</h2>-->
            <span class="description-refresh"><?php print $bazar_product['description']; ?></span>
      </div>


      <div class="panel entry-content" id="tab-info">
          <?php
          print render($region['product_inquiry_horizontal']);
          ?>
      </div>


      <div class="panel entry-content" id="tab-reviews">
          <div id="reviews"><div id="comments"><h2>Reviews</h2><p class="noreviews">There are no reviews yet, would you like to <a href="#" class="inline show_review_form">submit yours</a>?</p></div><div id="review_form_wrapper"><div id="review_form">								<div id="respond">
                         <?php print '<h3 id="reply-title">Be the first to review &ldquo;'.$product_title.'&rdquo; <small>';?>
                                  <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">
                                      Cancel reply
                                  </a>
                              </small>
                          </h3>
                          <form action="#" method="post" id="commentform">
                              <div class="row">																				<p class="comment-form-author"><label for="author">Name</label> <span class="required">*</span><input id="author" name="author" type="text" value="" size="30" aria-required="true" /></p>
                                  <p class="comment-form-email"><label for="email">Email</label> <span class="required">*</span><input id="email" name="email" type="text" value="" size="30" aria-required="true" /></p>
                                  <p class="comment-form-rating"><label for="rating">Rating</label><select name="rating" id="rating">
                                          <option value="">Rate&hellip;</option>
                                          <option value="5">Perfect</option>
                                          <option value="4">Good</option>
                                          <option value="3">Average</option>
                                          <option value="2">Not that bad</option>
                                          <option value="1">Very Poor</option>
                                      </select></p>
                                  <p class="comment-form-comment">
                                      <label for="comment">Your Review</label>
                                      <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="YOUR REVIEW"></textarea>
                                  </p>
                                  <input type="hidden" id="_n" name="_n" value="911326a9dd" />
                                  <input type="hidden" name="_wp_http_referer" value="/bazar/shop/walking-shoes/" />
                                  <p class="form-submit">
                                      <input name="submit" type="submit" id="submit" value="Submit Review" />
                                      <input type='hidden' name='comment_post_ID' value='506' id='comment_post_ID' />
                                      <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                  </p>
                              </div>
                              <input type="hidden" name="icl_comment_language" value="en" />
                          </form>
                      </div><!-- #respond -->
                  </div></div><div class="clear"></div></div>
      </div>

  </div>


  <div class="related products">

      <h2>Related Products</h2>
      <?php
      print render($region[$bazar_product['relative-products']]);
      ?>
      <div class="es-nav">
          <span class="es-nav-prev">Previous</span>
          <span class="es-nav-next">Next</span>
      </div>
      <div class="clear"></div>

  </div>


  </div>