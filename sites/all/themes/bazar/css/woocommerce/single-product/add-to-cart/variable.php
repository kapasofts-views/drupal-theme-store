<?php
/**
 * Variable product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.5
 */

global $woocommerce, $product, $post;

// resize the main image of each variations
if( yith_wcmg_is_enabled() ) {
	foreach ( $available_variations as $variation_id => $variation ) {
	    $available_variations[$variation_id]['image_src']  = yit_image( "src=$variation[image_src]&size=shop_single&output=url", false );
	    $available_variations[$variation_id]['image_magnifier'] = yit_image( "src=$variation[image_magnifier]&size=shop_magnifier&output=url", false );
	}
}
?>
<script type="text/javascript">
    var product_variations_<?php echo $post->ID; ?> = <?php echo json_encode( $available_variations ) ?>;
</script>

<?php do_action('woocommerce_before_add_to_cart_form'); ?>

<form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="variations_form cart group" method="post" enctype='multipart/form-data' data-product_id="<?php echo $post->ID; ?>">
    
    <?php if( is_shop_enabled() && yit_get_option('shop-detail-add-to-cart') ) : ?>
    <div class="quantity-wrap group">
        <label><?php _e( 'Quantity', 'yit' ) ?></label>
        <?php woocommerce_quantity_input(); ?>
    </div>
    <?php endif; ?>
    
    <div class="variations">
    	<?php $loop = 0; foreach ( $attributes as $name => $options ) : $loop++; ?>
			<label for="<?php echo sanitize_title($name); ?>"><?php echo $woocommerce->attribute_label($name); ?></label>
    		<div class="select-wrapper">
            	<select id="<?php echo esc_attr( sanitize_title($name) ); ?>" name="attribute_<?php echo sanitize_title($name); ?>">
    				<option value=""><?php echo __('Choose an option', 'yit') ?>&hellip;</option>
    				<?php
    					if ( is_array( $options ) ) {
    
    						if ( empty( $_POST ) )
    							$selected_value = ( isset( $selected_attributes[ sanitize_title( $name ) ] ) ) ? $selected_attributes[ sanitize_title( $name ) ] : '';
    						else
    							$selected_value = isset( $_POST[ 'attribute_' . sanitize_title( $name ) ] ) ? $_POST[ 'attribute_' . sanitize_title( $name ) ] : '';
    
    						// Get terms if this is a taxonomy - ordered
    						if ( taxonomy_exists( sanitize_title( $name ) ) ) {
    
    							$terms = get_terms( sanitize_title($name), array('menu_order' => 'ASC') );
    
    							foreach ( $terms as $term ) {
    								if ( ! in_array( $term->slug, $options ) ) continue;
    								echo '<option value="' . $term->slug . '" ' . selected( $selected_value, $term->slug, false ) . '>' . apply_filters( 'woocommerce_variation_option_name', $term->name ) . '</option>';
    							}
    						} else {
    							foreach ( $options as $option )
    								echo '<option value="' . $option . '" ' . selected( $selected_value, $option, false ) . '>' . apply_filters( 'woocommerce_variation_option_name', $option ) . '</option>';
    						}
    					}
    				?>
    			</select>
            </div> <?php
				if ( sizeof($attributes) == $loop )
					echo '<a class="reset_variations" href="#reset">'.__('Clear selection', 'yit').'</a>';
			?>
        <?php endforeach;?>
	</div>

	<?php do_action('woocommerce_before_add_to_cart_button'); ?>

	<div class="single_variation_wrap" style="display:none;">
		<div class="single_variation"></div>
		<div class="variations_button">
			<input type="hidden" name="variation_id" value="" />
			<?php if( is_shop_enabled() && yit_get_option('shop-detail-add-to-cart') ) : ?><button type="submit" class="single_add_to_cart_button button"><?php echo apply_filters('single_add_to_cart_text', __('Add to cart', 'yit'), $product->product_type); ?></button><?php endif ?>
		</div>
	</div>
	<div><input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" /></div>

	<?php do_action('woocommerce_after_add_to_cart_button'); ?>

</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>
