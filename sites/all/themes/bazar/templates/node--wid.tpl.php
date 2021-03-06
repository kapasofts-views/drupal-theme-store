<!--<div id="content-shop" class="span9 content group">-->
    <div itemscope itemtype="http://schema.org/Product" id="product-506" class="post-506 product type-product status-publish hentry sale instock">

        <div class="row">

            <div class="images">


                <!-- YITH Magnifier Template -->
                <!--<a itemprop="image" href="http://demo.yithemes.com/bazar/files/2013/01/0710-924x784.jpg" class="yith_magnifier_zoom" rel="thumbnails">-->
                <!--<img src="http://demo.yithemes.com/bazar/files/2013/01/0710-462x392.jpg" class="yit-image attachment-shop_single" width="462" height="392" />-->


                <?php print '<a itemprop="image" href="'.$bazar_product['img-magnified']['url'].'" class="yith_magnifier_zoom" rel="thumbnails">';?>
                <?php print '<img src="'.$bazar_product['img']['url'].'" alt="'.$bazar_product['img']['alt'].'" class="yit-image attachment-shop_single" width="462" height="392" />';?>
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
                    <?php print $bazar_product['description']; ?>
                </div>
                <!--<div class="social">
                    <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdemo.yithemes.com%2Fbazar%2Fshop%2Fwalking-shoes%2F&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
                    <span class="st_twitter"></span><span class="st_email"></span><span class="st_sharethis" st_image="http%3A%2F%2Fdemo.yithemes.com%2Fbazar%2Ffiles%2F2013%2F01%2F0710-1024x800.jpg"></span><span class="st_plusone_button"></span>
                </div>-->
<!--                <script type="text/javascript">var switchTo5x=true;</script>-->
<!--                <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>-->
<!--                <script type="text/javascript">stLight.options({publisher:"9c5a1d2e-f6e5-40dd-a371-30228258f8ea"});</script>-->
                <div class="product_meta">
                    <?php //print 'Type: '.$select_type_widget; ?>
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
          <div id="reviews"><div id="comments"><h2>Reviews</h2><p class="noreviews">There are no reviews yet, would you like to <a href="#review_form" class="inline show_review_form">submit yours</a>?</p></div><div id="review_form_wrapper"><div id="review_form">								<div id="respond">
                         <?php print '<h3 id="reply-title">Be the first to review &ldquo;'.$product_title.'&rdquo; <small>';?>
                                  <a rel="nofollow" id="cancel-comment-reply-link" href="/bazar/shop/walking-shoes/#respond" style="display:none;">
                                      Cancel reply
                                  </a>
                              </small>
                          </h3>
                      </div><!-- #respond -->
                  </div></div><div class="clear"></div></div>
      </div>

  </div>


  <div class="related products">

      <h2>Additional Photos</h2>
      <ul class="thumbnails">
          <?php
          foreach($bazar_product['other-img'] as $key=>$other_img ){
          print '<li class="span3">';
          print '<div class="thumbnail">';
          //print '    <a href="#" class="thumbnail">';
          print '     <img src="'.$other_img['url'].'" data-src="'.$other_img['url'].'" alt="'.$other_img['alt'].'">';
          //print '    </a>';
          print '</div>';
          print '</li>';
          }
          ?>
      </ul>


  </div>


  </div>