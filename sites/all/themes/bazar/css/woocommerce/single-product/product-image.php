<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $post, $woocommerce;

?>
<div class="images span<?php echo yit_get_span_from_width( yit_shop_large_w() + 8 ); ?>">

	<?php if ( has_post_thumbnail() ) : ?>

		<a itemprop="image" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="zoom" rel="thumbnails" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>"><?php yit_image( array( 'size' => apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ) ) ) ?></a>

	<?php else : ?>

		<img src="<?php echo woocommerce_placeholder_img_src(); ?>" alt="Placeholder" />

	<?php endif; ?>

	<?php do_action('woocommerce_product_thumbnails'); ?>

</div>