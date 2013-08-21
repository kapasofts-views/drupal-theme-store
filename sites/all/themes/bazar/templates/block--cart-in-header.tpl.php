<?php  if(empty($bazar_cart)){$bazar_cart = $variables;}?>
<div class="cart-row group">

    <div class="cart-items cart-items-icon">
        <?php print '<span class="cart-items-number">'.$bazar_cart['total-qty'].'</span>';?>
        <span class="cart-items-label">Items</span>
    </div>

    <div class="cart-subtotal">
        <span class="cart-subtotal-currency">$</span>
        <?php print '<span class="cart-subtotal-integer">'.$bazar_cart['total-price'].'</span>';?>
        <?php print '<span class="cart-subtotal-decimal">'.$bazar_cart['total-price-cents'].'</span>';?>
    </div>

    <div class="widget woocommerce widget_shopping_cart"><div class="border-1 border">
            <div class="border-2 border">
                <h2 class="widgettitle">Cart</h2>
                <?php
                if($bazar_cart['is-empty']){
                    print '<a class="cart_control cart_control_empty">Empty Cart</a>';
                }else{
                    print '<a href="/cart" class="cart_control" >View Cart</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>