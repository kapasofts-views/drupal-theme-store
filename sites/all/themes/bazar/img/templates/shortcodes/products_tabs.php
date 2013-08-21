<?php
	wp_enqueue_script( 'caroufredsel' );
	wp_enqueue_script( 'touch-swipe' );
	wp_enqueue_script( 'mousewheel' );
?>
<div class="tabs-container products_tabs">
	<ul class="tabs">
		<?php
			$sc_must_have = $sc_best_seller = $sc_special_offers = '';
			
			if( strpos($categories, "ust-have") != false )
			{
				echo "<li><h4><a href=\"#tab-must-have\" title=\"" . apply_filters( 'yit_product_tabs_must_have_title', __('Must Have', 'yit') ) . "\">" . __('Must Have', 'yit') . "</a></h4></li>";
				if($slider == "yes")
					$sc_must_have = '[products_slider title="" per_page="' . $per_page . '" featured="yes" latest="no" best_sellers="no" on_sale="no" category="0" orderby="' . $orderby . '" order="' . $order . '" layout="default" ]';
				else
					$sc_must_have = '[show_products per_page="' . $per_page . '" category="0" show="featured" orderby="' . $orderby . '" order="' . $order . '" layout="default" ]';
			}
			if( strpos($categories, "best-seller") != false )
			{
				echo "<li><h4><a href=\"#tab-best-seller\" title=\"" . apply_filters( 'yit_product_tabs_best_sellers_title', __('Best Seller', 'yit') ) . "\">" . __('Best Seller', 'yit') . "</a></h4></li>";
				if($slider == "yes")
					$sc_best_seller = '[products_slider title="" per_page="' . $per_page . '" featured="no" latest="no" best_sellers="yes" on_sale="no" category="0" orderby="' . $orderby . '" order="' . $order . '" layout="default" ]';
				else
					$sc_best_seller = '[show_products per_page="' . $per_page . '" category="0" show="best_sellers" orderby="' . $orderby . '" order="' . $order . '" layout="default" ]';
			}	
			if( strpos($categories, "special-offers") != false )
			{
				echo "<li><h4><a href=\"#tab-special-offers\" title=\"" . apply_filters( 'yit_product_tabs_special_offers_title', __('Special Offers', 'yit') ) . "\">" . __('Special Offers', 'yit') . "</a></h4></li>";
				if($slider == "yes")
					$sc_special_offers = '[products_slider title="" per_page="' . $per_page . '" featured="no" latest="no" best_sellers="no" on_sale="yes" category="0" orderby="' . $orderby . '" order="' . $order . '" layout="default" ]';
				else
					$sc_special_offers = '[show_products per_page="' . $per_page . '" category="0" show="onsale" orderby="' . $orderby . '" order="' . $order . '" layout="default" ]';
			}
		?>
	</ul>
	<div class="border-box group">
		<div id="tab-must-have" class="panel group"><?php echo do_shortcode( $sc_must_have ); ?></div>
		<div id="tab-best-seller" class="panel group"><?php echo do_shortcode( $sc_best_seller ); ?></div>
		<div id="tab-special-offers" class="panel group"><?php echo do_shortcode( $sc_special_offers ); ?></div>
	</div>
</div>

<script type="text/javascript" charset="utf-8">
<?php global $woocommerce_loop; ?>
jQuery(function($){
	var carouFredSel;
	var carouFredSelOptions = {
		responsive: false,
		auto: true,
		items: <?php echo empty( $woocommerce_loop['columns'] ) ? 0 : $woocommerce_loop['columns'] ?>,
		circular: true,
		infinite: true,
		debug: false,
        prev: '.section-portfolio-slider .prev',
        next: '.section-portfolio-slider .next',
        swipe: {
          	onTouch: true
        },
        scroll : {
            items     : 1,
            pauseOnHover: true
        } 
	};


/*
	$('.products_tabs').imagesLoaded(function(){
		$('.products:first', $(this)).each(function(){

	   		var prev = $(this).find('.es-nav-prev');
	   		var next = $(this).find('.es-nav-next');
	
	   		carouFredSelOptions.prev = prev;
	   		carouFredSelOptions.next = next;

			carouFredSel = $(this).carouFredSel(carouFredSelOptions);
		});
		
    });
*/

	$('.panel', $('.products_tabs')).on('yit_tabopened', function(){
		
		var t = $(this);
   		var prev = $(this).find('.es-nav-prev');
   		var next = $(this).find('.es-nav-next');

   		carouFredSelOptions.prev = prev;
   		carouFredSelOptions.next = next;
		
		if( $('body').outerWidth() <= 767 ) {
			t.find('li').each(function(){
				$(this).width( t.width() );
			});
						
			carouFredSelOptions.items = 1;
		} else {
			t.find('li').each(function(){
				$(this).attr('style', '');
			});
						
			//carouFredSelOptions.items = $('#primary').hasClass('sidebar-no') ? 4 : 3;
		}
		
		carouFredSel = $(this).find('.products').carouFredSel(carouFredSelOptions);
	});
	
    $('.panel', $('.products_tabs')).on('yit_tabclosed', function(){
    	carouFredSel.trigger('destroy', false).attr('style','');
    });
    
    // create slider when page is loaded
    $('.panel', $('.products_tabs')).imagesLoaded(function(){
        $(this).trigger('yit_tabclosed').trigger('yit_tabopened');    
    });

    $(window).resize(function(){
    	var t = carouFredSel.parents('.panel');
    	carouFredSel.trigger('destroy', false).attr('style','');
    	
		if( $('body').outerWidth() <= 767 ) {
			t.find('li').each(function(){
				$(this).width( t.width() );
			});
							
			carouFredSelOptions.items = 1;
		} else {
			t.find('li').each(function(){
				$(this).attr('style', '');
			});
						
			//carouFredSelOptions.items = $('#primary').hasClass('sidebar-no') ? 4 : 3;
		}
    	
    	carouFredSel.carouFredSel(carouFredSelOptions);
    });


/*
	$('.products_tabs').each(function(){
		$('.border-box > div.panel', $(this)).on('yit_tabopened', function(){
			$(this).find('.products-slider-wrapper').elastislide( elastislide_defaults );
		});
		$('.border-box > div.panel', $(this)).on('yit_tabclosed', function(){
			$(this).find('.products-slider-wrapper').elastislide( 'destroy' );
		});
	});
*/
});
</script>