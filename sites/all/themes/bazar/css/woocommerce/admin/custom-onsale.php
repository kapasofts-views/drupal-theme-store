<?php
/**
 * @author 		YIThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
 
global $post;
 
echo '<div class="options_group">';
	
	// Active custom onsale                         
	$active = get_post_meta($post->ID, '_active_custom_onsale', true);
	woocommerce_wp_checkbox( array( 'id' => '_active_custom_onsale', 'label' => __('Active custom onsale icon', 'yit'), 'cbvalue' => 'yes', 'value' => $active ) );

    // Choose a preset                                                    
    $field = array( 'id' => '_preset_onsale_icon', 'label' => __('Choose a preset', 'yit') );                              
	$preset = get_post_meta($post->ID, $field['id'], true); ?>
	
	<p class="form-field <?php echo $field['id'] ?>_field">
	   <b><?php echo $field['label'] ?></b><br />
	   <label for="<?php echo $field['id'] ?>_onsale">On Sale!<input type="radio" name="<?php echo $field['id'] ?>" id="<?php echo $field['id'] ?>_onsale" value="onsale"<?php checked($preset, 'onsale'); ?> /></label><br /> 
	   <label for="<?php echo $field['id'] ?>_50">-50%<input type="radio" name="<?php echo $field['id'] ?>" id="<?php echo $field['id'] ?>_50" value="-50%"<?php checked($preset, '-50%'); ?> /></label><br /> 
	   <label for="<?php echo $field['id'] ?>_25">-25%<input type="radio" name="<?php echo $field['id'] ?>" id="<?php echo $field['id'] ?>_25" value="-25%"<?php checked($preset, '-25%'); ?> /></label><br /> 
	   <label for="<?php echo $field['id'] ?>_10">-10%<input type="radio" name="<?php echo $field['id'] ?>" id="<?php echo $field['id'] ?>_10" value="-10%"<?php checked($preset, '-10%'); ?> /></label><br />    
	   <label for="<?php echo $field['id'] ?>_custom"><?php _e( 'Custom', 'yit' ) ?><input type="radio" name="<?php echo $field['id'] ?>" id="<?php echo $field['id'] ?>_custom" value="custom"<?php checked($preset, 'custom'); ?> /></label><br />    
	   <small><?php _e( '(if you have choosen "Custom", upload your image in the option below, suggested size: 75x75px)', 'yit' ) ?></small>
    </p>
	
	<?php

	// Upload custom onsale icon
	$field = array( 'id' => '_custom_onsale_icon', 'label' => __('Custom onsale icon URL', 'woocommerce') ); 
	$file_path = get_post_meta($post->ID, $field['id'], true);
	echo '<p class="form-field"><label for="'.$field['id'].'">'.$field['label'].':</label>
		<input type="text" class="short file_path" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$file_path.'" placeholder="'.__('File path/URL', 'woocommerce').'" />
		<input type="button"  class="upload_file_button button" value="'.__('Upload a file', 'woocommerce').'" />
	</p>';

	do_action('woocommerce_product_options_custom_onsale');

echo '</div>';