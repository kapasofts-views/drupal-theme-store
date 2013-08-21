<?php
/**
 * Custom tab
 */

global $post;

$tabs = yit_get_post_meta($post->ID, '_custom_tabs');

if( !empty( $tabs )) {
		foreach( $tabs as $tab ) :
			if($tab["name"] != "" && $tab["value"] != "") :
        ?>
        	<div class="panel entry-content" id="tab-custom-<?php echo $tab["position"]; ?>">
        		<?php echo $tab["value"]; ?>
        	</div>
        <?php
	   endif;
    endforeach;
}
?>