<?php
function bazar_preprocess_html(&$vars, $hook) {

    $type = arg(0);
    switch($type){
        case 'node':
            if(is_numeric(arg(1))){
                $node = node_load(arg(1));
                $currentType = $node->type;
            }
            break;
    }
    $vars['header_tapi'] = _header_tapi();


    $bazarJsButtom = array();
    $bazarJsButtom['js-bottom']['url']='/js/build/bottom/default.min.js';
    $menu_selector = array();
    $bazarCssBodyTag = 'no_js responsive';
    $siteCss = 'default.css';

    if($vars['is_front']){$menu_selector['front']='current-menu-ancestor';}
    switch($currentType){
        case 'template_display':/**********Template Display***********/
            $siteCss = 'display-all.css';
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/build/display.css', array('group' => CSS_THEME, 'type' => 'file'));
            $bazarJsButtom['js-bottom']['url']='/js/build/bottom/display.min.js';
            $bazarCssBodyTag = 'single single-product no_js responsive woocommerce woocommerce-page';
            break;
        case 'wid':/**********Template Display***********/
            $siteCss = 'display-all.css';
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/build/display.css', array('group' => CSS_THEME, 'type' => 'file'));
            $bazarCssBodyTag = 'single single-product no_js responsive woocommerce woocommerce-page';
            $bazarJsButtom['js-bottom']['url']='/js/build/bottom/display.min.js';
            break;
        case 'contact':/**********Contact***********/
            $menu_selector['contact'] = 'current-menu-ancestor';
            break;
        case 'all_designs':
            $menu_selector['all_designs'] = 'current-menu-ancestor';
            break;
        case 'all_widgets':
            $menu_selector['all_widgets'] = 'current-menu-ancestor';
            break;
        case 'front':
        case 'home':
            $bazarJsButtom['js-bottom']['url']='/js/build/bottom/front.min.js';
            break;
        default:
        break;
    }

    drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/'.$siteCss, array('group' => CSS_THEME, 'type' => 'file'));
    drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/designssquare-style.css', array('group' => CSS_THEME, 'type' => 'file'));
    $vars['bazarJsButtom'] = $bazarJsButtom;
    $vars['bazarCssBodyTag'] = $bazarCssBodyTag;
    $vars['menu_selector'] = $menu_selector;

    //making blocks available in html scope
    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

        // Get the content for each region and add it to the $region variable
        if ($blocks = block_get_blocks_by_region($region_key)) {
            $vars['region'][$region_key] = $blocks;
        }
        else {
            $vars['region'][$region_key] = array();
        }
    }


    //retrieving current page for seo content
    $nodes_array = $vars["page"]["content"]["system_main"]["nodes"];
    $page_seo = array();
    if($nodes_array != null){
        $nodeId=max(array_keys($nodes_array));
        $currentNode = $vars["page"]["content"]["system_main"]["nodes"][$nodeId]["#node"];
        $page_seo['title'] = $currentNode->field_title_seo[LANGUAGE_NONE][0]['value'];
        $page_seo['desc'] = $currentNode->field_description_seo[LANGUAGE_NONE][0]['value'];
        $page_seo['keywords'] = $currentNode->field_keywords_seo[LANGUAGE_NONE][0]['value'];
        $vars['page_seo'] = $page_seo;
    }else{
        $vars['page_seo'] = initDefaultSeo();
    }

    if(empty($page_seo['title'])){
        $vars['page_seo'] = initDefaultSeo();
    }
}

function initDefaultSeo(){
    $page_seo = array();
    $page_seo['title'] = 'Premium Drupal Themes Templates Buy';
    $page_seo['desc'] = 'Drupal 7 Themes Best Drupal Themes WIDE SELECTION';
    $page_seo['keywords'] = 'drupal themes,drupal 7 themes,drupal theme,best drupal themes,premium drupal themes,drupal template,drupal 7 theme,premium drupal themes,drupal template, best drupal 7 themes, premium drupal 7 themes,best drupal theme';
    return $page_seo;
}

function bazar_preprocess_page(&$vars, $hook) {
    $vars['styles'] = drupal_get_css();
    $conversion_code = '';
//    $var['bazar_background'] = theme_get_setting('bazar_background');
    $type = $vars['node']->type;
    if (isset($vars['node'])) {
        if(isset($vars['node']->field_product)){
            $default_product = commerce_product_reference_default_product($vars['node']->field_product);
            $vars['default_product'] = commerce_product_load($default_product[0]['product_id']);
        }
        $vars['theme_hook_suggestions'][] = 'page__'.$type;
        $vars['current_url'] = $_GET['q'];
    }else{
        //checkout completed
        $url =  $_GET['q'];
        if(preg_match("/complete/", $url) && preg_match("/checkout/", $url)){
            $conversion_code = '<script type="text/javascript">'."\n";
            $conversion_code .= '/* <![CDATA[ */'."\n";
            $conversion_code .= 'var google_conversion_id = 980840353;'."\n";
            $conversion_code .= 'var google_conversion_language = "en";'."\n";
            $conversion_code .= 'var google_conversion_format = "3";'."\n";
            $conversion_code .= 'var google_conversion_color = "ffffff";'."\n";
            $conversion_code .= 'var google_conversion_label = "8vHHCPex7QUQod_Z0wM";'."\n";
            $conversion_code .= 'var google_conversion_value = 25;'."\n";
            $conversion_code .= 'var google_remarketing_only = false;'."\n";
            $conversion_code .= '/* ]]> */'."\n";
            $conversion_code .= '</script>'."\n";
            $conversion_code .= '<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>'."\n";
            $conversion_code .= '<noscript>'."\n";
            $conversion_code .= '<div style="display:inline;">'."\n";
            $conversion_code .= '<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/980840353/?value=25&amp;label=8vHHCPex7QUQod_Z0wM&amp;guid=ON&amp;script=0"/>'."\n";
            $conversion_code .= '</div>'."\n";
            $conversion_code .= '</noscript>'."\n";

            //load checkout_complete node
            $nid_checkout = db_select('node', 'n')
                ->fields('n', array('nid'))
                ->fields('n', array('type'))
                ->condition('n.type', 'checkout_complete')
                ->execute()
                ->fetchCol();

            $checkoutNode = node_load($nid_checkout[0]);

            $vars['basic_tapi'] = _checkout_tapi($checkoutNode);
        }

    }
    $vars['conversion_code'] = $conversion_code;

    switch($type){
        case 'page':
            $vars['basic_tapi'] = _basic_tapi($vars['node']);
            break;
    }


    switch(arg(0)){
        case 'user':
            $vars['user_tapi'] = _user_tapi();
            break;
    }

}

function bazar_commerce_cart_empty_block() {
    return '<div class="cart-empty-block"></div>';
}

function bazar_preprocess_block(&$vars, $hook){
    if ($vars['block_html_id'] == 'block-bazar-theme-add-to-cart') {
        $vars['default_product_price'] = $vars['block']->default_product_price;
    }
    $bazar_cart = array();
    if ($vars['block']->region == 'cart_in_header') {
        if ($order = commerce_cart_order_load($vars['user']->uid)) {
            $wrapper = entity_metadata_wrapper('commerce_order', $order);
            $bazar_cart['total-qty'] = commerce_line_items_quantity($wrapper->commerce_line_items, commerce_product_line_item_types());
            $price_raw= commerce_line_items_total($wrapper->commerce_line_items, commerce_product_line_item_types())['amount'];

            if($bazar_cart['total-qty']>0){
                $bazar_cart['total-price'] = substr($price_raw,0,-2);
                $bazar_cart['total-price-cents'] = substr($price_raw,-2);
               $bazar_cart['is-empty'] = false;
            }else{
                $bazar_cart['total-price'] = 0;
                $bazar_cart['total-price-cents'] = '00';
               $bazar_cart['is-empty'] = true;
            }

        }else{
            $bazar_cart['total-price'] = 0;
            $bazar_cart['total-price-cents'] = '00';
            $bazar_cart['is-empty'] = true;
            $bazar_cart['total-qty'] = 0;
        }
        $vars['bazar_cart'] = $bazar_cart;
    }
}

function bazar_preprocess_node(&$vars , $hook) {

    switch($vars['type']){
        case 'template_display':{
            $default_product = $vars['content']['product:commerce_price']['#object'];
            $prod_default = array();
            $prod_default['img'] = array();
            $prod_default['img']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img']['alt'] = $default_product->field_featured_image[LANGUAGE_NONE][0]['alt'];
            $prod_default['img-magnified']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img-magnified']['alt'] = $default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['alt'];

            if($default_product->field_is_on_sale[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-on-sale'] = true;
            }else{
                $prod_default['is-on-sale'] = false;
            }

            if($default_product->field_is_new_product[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-new-product'] = true;
            }else{
                $prod_default['is-new-product'] = false;
            }


            $prod_default['description'] = $default_product->field_description[LANGUAGE_NONE][0]['value'];
            if(empty($prod_default['description'])){
                $prod_default['description'] = t('Please, contact us for product description');
            }
            $prod_default['title'] = $vars['title'];

            if($default_product->field_mobile_support[LANGUAGE_NONE][0]['taxonomy_term']->name == 'Responsive'){
                $prod_default['mobile_support'] = 'yes';
            }else{
                $prod_default['mobile_support'] = 'no';
            }

            $prod_default['design_framework'] = $default_product->field_design_framework[LANGUAGE_NONE][0]['taxonomy_term']->name;

            $prod_default['category']=array();
            foreach($default_product->field_category[LANGUAGE_NONE] as $key=>$val){
                $prod_default['category'][] = $val['taxonomy_term']->name;
            }

            $prod_default['demo_url'] = $default_product->field_demo_url[LANGUAGE_NONE][0]['value'];

            if($default_product->field_hide_demo_header[LANGUAGE_NONE][0]['taxonomy_term']->name == 'yes'){
               $prod_default['hide_demo_header'] = 'hide-demo-header';
            }else{
                $prod_default['hide_demo_header'] = '';
            }

            $prod_default['demo_url'] = $default_product->field_demo_url[LANGUAGE_NONE][0]['value'];

            $vars['bazar_product'] = $prod_default;

            break;
        }
        case 'wid':{
            $default_product = $vars['content']['product:commerce_price']['#object'];
            $prod_default = array();
            $prod_default['img'] = array();
            $prod_default['img']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img']['alt'] = $default_product->field_featured_image[LANGUAGE_NONE][0]['alt'];
            $prod_default['img-magnified']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img-magnified']['alt'] = $default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['alt'];

            $prod_default['other-img'] = array();
            $other_images = $default_product->field_other_images[LANGUAGE_NONE];
            foreach($other_images as $key=>$value){
                $prod_default['other-img'][$key] = array();
                $prod_default['other-img'][$key]['url'] = url('sites/default/files/'.file_uri_target($value['uri']), array('absolute'=>true));
                $prod_default['other-img'][$key]['alt'] = $value['alt'];
            }

            if($default_product->field_is_on_sale[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-on-sale'] = true;
            }else{
                $prod_default['is-on-sale'] = false;
            }

            if($default_product->field_is_new_product[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-new-product'] = true;
            }else{
                $prod_default['is-new-product'] = false;
            }

            $prod_default['description'] = $default_product->field_description[LANGUAGE_NONE][0]['value'];
            if(empty($prod_default['description'])){
                $prod_default['description'] = t('Please, contact us for product description');
            }
            $prod_default['title'] = $vars['title'];

            $vars['bazar_product'] = $prod_default;
            break;
        }
        default:{
            break;
        }
    }
    $ctx_plugin = context_get_plugin('reaction', 'block');
    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {
        $blocks = (block_get_blocks_by_region($region_key)) ? block_get_blocks_by_region($region_key) : $ctx_plugin->block_get_blocks_by_region($region_key);
        // Get the content for each region and add it to the $region variable
        if ($blocks) {
            $vars['region'][$region_key] = $blocks;
        }
        else {
            $vars['region'][$region_key] = array();
        }
    }
}

function bazar_context_load_alter(&$context) {
    //swap the particular view of related themes
    if ($context->name === 'template_display' && isset($context->reactions['block'])) {
        $current_node = node_load(arg(1));
        //retrieve product type
        $product_instance = field_get_items('node', $current_node, 'field_product');
        $product_id = field_view_value('node', $current_node, 'field_product', $product_instance[0])['product_id']['#value'];
        $product = commerce_product_load($product_id);

        //retrieve the category of the product
        $tag_instance = field_get_items('commerce_product', $product, 'field_category');
        $product_category = field_view_value('commerce_product', $product, 'field_category', $tag_instance[0])['#title'];

        //assign the view containing related themes
        switch($product_category){
            case 'Business - Corporate':
                $new_related_view = 'template_designs-related_business_corporate';
                break;
            case 'Commerce - Retail':
                $new_related_view = 'template_designs-related_commerce_retail';
                break;
            case 'Admin - Hosting':
                $new_related_view = 'template_designs-related_admin_hosting';
                break;
            case 'Magazine - News':
                $new_related_view = 'template_designs-related_magazine_news';
                break;
            case 'Hotel and Bed & Breakfast':
                $new_related_view = 'template_designs-related_hotel';
                break;
            case 'Landing Page':
                $new_related_view = 'template_designs-related_landing_page';
                break;
            case 'Personal - Creative':
                $new_related_view = 'template_designs-related_personal_creative';
                break;
            default:
                $new_related_view = 'template_designs-related_business_corporate';
        }

        //retrieve views cache
        $views_map = variable_get('views_block_hashes', array());
        $views_map_reverse = array_flip($views_map);

        //loop through all blocks and see if any assigned to the region 'related_products'
        foreach($context->reactions['block']['blocks'] as $key => $view){
            if($view['region'] == 'related_products'){
                //swap the current view:block to the new view
                unset($context->reactions['block']['blocks'][$key]);
                $delta = (isset($views_map_reverse[$new_related_view])) ? $views_map_reverse[$new_related_view] : $new_related_view;
                $context->reactions['block']['blocks'][$new_related_view] = array(
                    'module' => 'views',
                    'delta' => $delta,
                    'region' => 'related_products',
                    'weight' => '-10',
                );
            }
        }
    }
}


function bazar_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    if ((arg(0) == 'node') && is_numeric(arg(1)) && ($node = node_load(arg(1)))) {
        switch($node->type){
            case 'template_display':
                $breadcrumb[] = l(t('Design Themes'), 'drupal-responsive-theme');
                $breadcrumb[] = $node->title;
                break;
            case 'wid':
                $breadcrumb[] = l(t('Widgets'), 'web-widgets-for-sale');
                $breadcrumb[] = $node->title;
                break;
            default:
                break;
        }
    }

    if (!empty($breadcrumb)) {
       $breadcrumbs = '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">';
        $count = count($breadcrumb) - 1;
        foreach ($breadcrumb as $key => $value) {
            if ($count != $key) {
                $breadcrumbs .=  $value . ' / ';
            }
            else{
                $breadcrumbs .= $value;
            }
        }
        $breadcrumbs .= '</nav>';
        return $breadcrumbs;
    }
}

function bazar_button($variables) {
    $url =  $_GET['q'];

    $element = $variables['element'];
    $label = $element['#value'];
    element_set_attributes($element, array('id', 'name', 'value', 'type'));

    $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
    if (!empty($element['#attributes']['disabled'])) {
        $element['#attributes']['class'][] = 'form-button-disabled';
    }

    if(!preg_match("/review/", $url) && !preg_match("/checkout/", $url)){
        unset($element['#attributes']['class']);
        $element['#attributes']['class'][] = 'alt';
        $element['#attributes']['class'][] = 'button';
        $element['#attributes']['class'][] = 'single_add_to_cart_button';
    }

    // Prepare input whitelist - added to ensure ajax functions don't break
    $whitelist = _bazar_element_whitelist();

    if (in_array($element['#id'], $whitelist)) {
        return '<input' . drupal_attributes($element['#attributes']) . ">\n"; // This line break adds inherent margin between multiple buttons
    }
    else {
        return '<button' . drupal_attributes($element['#attributes']) . '>'. $label ."</button>\n"; // This line break adds inherent margin between multiple buttons
    }

}

////filter related products not include currently displayed product
//function bazar_views_post_execute(&$view) {
//    if($view->name == 'template_designs' && $view->current_display == 'designer_product_report'){
//        switch($view->current_display){
//            case 'related_business_corporate':
//                //related product view filtered
//                $filter_results = array_filter($view->result, "_is_not_current_product");
//                $view->result = $filter_results;
//                break;
//            default:
//        }
//
//    }
//}
//
//function _is_not_current_product($result){
//    $current_node = node_load(arg(1));
//    //retrieve product type
//    $product_instance = field_get_items('node', $current_node, 'field_product');
//    $displayed_product_id = field_view_value('node', $current_node, 'field_product', $product_instance[0])['product_id']['#value'];
////    $product = commerce_product_load($product_id);
//
//        if(!empty($current_node) && $result->product_id == $displayed_product_id){
//            return false;
//        }else{
//            return true;
//        }
//}

/**
 * Returns an array containing ids of any whitelisted drupal elements
 */
function _bazar_element_whitelist() {
    /**
     * Why whitelist an element?
     * The reason is to provide a list of elements we wish to exclude
     * from certain modifications made by the bootstrap theme which
     * break core functionality - e.g. ajax.
     */
    return array(
        'edit-refresh',
        'edit-pass-pass1',
        'edit-pass-pass2',
        'panels-ipe-cancel',
        'panels-ipe-customize-page',
        'panels-ipe-save',
    );
}

function bazar_form($variables) {
    $element = $variables['element'];
    if (isset($element['#action'])) {
        $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
    }
    element_set_attributes($element, array('method', 'id'));
    if (empty($element['#attributes']['accept-charset'])) {
        $element['#attributes']['accept-charset'] = "UTF-8";
    }
    // Anonymous DIV to satisfy XHTML compliance.
    return '<form' . drupal_attributes($element['#attributes']) . '><div>' . $element['#children'] . '</div></form>';
}


function _basic_tapi($node){
    $field = field_get_items('node', $node, 'field_page_slogan');
    $slogan = field_view_value('node', $node, 'field_page_slogan', $field[0]);

    return array(
       'title' => !empty($node->title) ? $node->title : '',
       'body' => !empty($node->body) ? $node->body: '',
       'slogan' => !empty($slogan) ? render($slogan) : '',
    );
}

function _simple_tapi($vars){
    return array(
        'title' => !empty($vars['title']) ? $vars['title'] : '',
        'body' => !empty($vars['body']) ? $vars['body']: '',
        'slogan' => !empty($vars['slogan']) ? $vars['slogan'] : '',
    );
}


function _checkout_tapi($node){
    $field = field_get_items('node', $node, 'field_checkout_message');
    $checkout_message = render(field_view_value('node', $node, 'field_checkout_message', $field[0]));
    $basic = _basic_tapi($node);
    $checkout_tapi = array(
        'checkout_message' =>($checkout_message) ? $checkout_message : '',
    );
    return array_merge($basic, $checkout_tapi);
}

function _user_tapi(){
global $user;
    if($user && user_access('access commerce reports')){
        $report = views_embed_view('commerce_reports_products', 'designer_product_report');
        $designer_report = array(
            '#theme' => 'designer_reports',
            '#dreports_tapi' => array(
                'title' => 'Designer Sales Report',
                'report' => $report,
            ),
        );
        $content = drupal_render($designer_report);
    }


    return array(
        'designer_report' => (!empty($content)) ? $content : '',
    );
}

function _header_tapi(){
    global $user;
    if($user->uid){
        //authenticated user
        $url = 'user/logout';
        $content = 'Logout';
        $profile_url = 'user';
        $profile_content = $user->name;
        $authenticated = True;
    }else{
        $url = 'user';
        $content = 'Login <span> / </span> Register';
        $authenticated = False;
        $profile_url = '';
        $profile_content = '';
    }

    return array(
        'login' => array(
            'url' => $url,
            'text' => $content,
        ),
        'profile' => array(
            'url' => $profile_url,
            'text' => $profile_content,
        ),
        'is_authenticated' => $authenticated,
    );
}

function bazar_page_alter(&$page){
    global $user;
    if(arg(0) === 'user' && $user->uid !== 0 ){
        //don't display spam validation field since already logged in
        unset($page['content']['system_main']['field_prevent_spam']);
    }
}



