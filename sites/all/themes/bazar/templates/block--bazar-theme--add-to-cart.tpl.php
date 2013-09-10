<div class="product-box group">
    <div class="border group">
        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <p itemprop="price" class="price">
                <del><span class="amount"><?php print $default_product_orginal_price ?></span></del> <ins><span class="amount product-final-price"><?php print $default_product_price ?></span></ins>		</p>
            <link itemprop="availability" href="http://schema.org/InStock" />
        </div>
            <?php print $content ?>
        <div class="border borderstrong"></div>
        <div class="border"></div>
        <div class="border"></div>
        <div class="border"></div>

        <div class="buttons buttons_3 group">
            <div class="yith-wcwl-add-to-wishlist">
                <div class="yith-wcwl-add-button">
                    <a href="#" data-product-id="506" data-product-type="simple" class="add_to_wishlist" >Wishlist</a>
                    <?php print '<img src="'.base_path().path_to_theme().'/img/top-drupal-themes-spin.gif" class="ajax-loading" id="add-items-ajax-loading" alt="buy drupal 7 themes spin" style="visibility:hidden" width="16" height="16" />';?>
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
            <div class="woocommerce product compare-button"><a href="#" class="compare" data-product_id="506">Compare</a></div><a href="#" class="woo_compare_button_go hide" style="display: none;"></a>
            <a href="#" class="yit_share share">Share</a>        </div>
    </div>
</div>

