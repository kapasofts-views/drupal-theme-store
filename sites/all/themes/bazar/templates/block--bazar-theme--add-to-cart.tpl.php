<div class="product-box group">
    <div class="border group">

        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <p itemprop="price" class="price">
                <del><span class="amount"><?php print $default_product_orginal_price ?></span></del> <ins><span class="amount product-final-price"><?php print $default_product_price ?></span></ins>		</p>
            <link itemprop="availability" href="http://schema.org/InStock" />

        </div>

<!--        <form action="/bazar/shop/walking-shoes/?add-to-cart=506" class="cart" method="post" enctype='multipart/form-data'>-->
<!--<div class="cart">-->




            <!--                  <label>Quantity</label>-->
            <!--                  <div class="quantity">-->
            <!--                      <input type="number" step="1" min="1" max="" name="quantity" value="1" size="4" title="Qty" class="input-text qty text" maxlength="12" />-->
            <!--                  </div>-->
<!--            <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>-->
            <?php print $content ?>
<!--    </div>-->
<!--        </form>-->



        <div class="border borderstrong"></div>
        <div class="border"></div>
        <div class="border"></div>
        <div class="border"></div>

        <div class="buttons buttons_3 group">
            <div class="yith-wcwl-add-to-wishlist">
                <div class="yith-wcwl-add-button">
                    <a href="#" data-product-id="506" data-product-type="simple" class="add_to_wishlist" >Wishlist</a>
                    <?php print '<img src="'.base_path().path_to_theme().'/img/wpspin_light.gif" class="ajax-loading" id="add-items-ajax-loading" alt="" style="visibility:hidden" width="16" height="16" />';?>
                </div>
                <div class="yith-wcwl-wishlistaddedbrowse" style="display:none;">
                    <span class="feedback">Product added!</span>
                    <a href="#">View Wishlist</a>
                </div>
                <div class="yith-wcwl-wishlistexistsbrowse" style="display:none">
                    <span class="feedback">The product is already in the wishlist!</span>
                    <a href="#">View Wishlist</a>
                </div>
                <div style="clear:both">

                </div>
                <div class="yith-wcwl-wishlistaddresponse">

                </div>
            </div>
            <div class="clear"></div>
            <script type="text/javascript">
                if( !jQuery( '#yith-wcwl-popup-message' ).length ) {
                    jQuery( 'body' ).prepend(
                        '<div id="yith-wcwl-popup-message" style="display:none;">' +
                            '<div id="yith-wcwl-message"></div>' +
                            '</div>'
                    );
                }
            </script>

            <div class="woocommerce product compare-button"><a href="/bazar/shop/walking-shoes/?action=yith-woocompare-add-product&amp;id=506&amp;_wpnonce=3c1ccdd5b8" class="compare" data-product_id="506">Compare</a></div><a href="#" class="woo_compare_button_go hide" style="display: none;"></a>
            <a href="#" class="yit_share share">Share</a>        </div>

    </div>
</div>

