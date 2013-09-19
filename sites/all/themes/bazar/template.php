<?php
function bazar_preprocess_html(&$vars, $hook) {

    if(arg(0)=='node' && is_numeric(arg(1))) {
        $node = node_load(arg(1));
        $currentType = $node->type;
    }

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
    $vars['bazarJsButtom'] = $bazarJsButtom;
    $vars['bazarCssBodyTag'] = $bazarCssBodyTag;
    $vars['menu_selector'] = $menu_selector;

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
    $var['bazar_background'] = theme_get_setting('bazar_background');
    if (isset($vars['node'])) {
        $default_product = commerce_product_reference_default_product($vars['node']->field_product);
        $vars['default_product'] = commerce_product_load($default_product[0]['product_id']);

        $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;

        $vars['current_url'] = $_GET['q'];
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


            $without_space_category = preg_replace('/\s|&+/','',$prod_default['category'][0]);
            $prod_default['relative-products'] = strtolower(str_replace('-', '_', $without_space_category));
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

    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

        // Get the content for each region and add it to the $region variable
        if ($blocks = block_get_blocks_by_region($region_key)) {
            $vars['region'][$region_key] = $blocks;
        }
        else {
            $vars['region'][$region_key] = array();
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
    $element = $variables['element'];
    $label = $element['#value'];
    element_set_attributes($element, array('id', 'name', 'value', 'type'));

    $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
    if (!empty($element['#attributes']['disabled'])) {
        $element['#attributes']['class'][] = 'form-button-disabled';
    }

    unset($element['#attributes']['class']);
    $element['#attributes']['class'][] = 'single_add_to_cart_button';
    $element['#attributes']['class'][] = 'button';
    $element['#attributes']['class'][] = 'alt';
    // Prepare input whitelist - added to ensure ajax functions don't break
    $whitelist = _bazar_element_whitelist();

    if (in_array($element['#id'], $whitelist)) {
        return '<input' . drupal_attributes($element['#attributes']) . ">\n"; // This line break adds inherent margin between multiple buttons
    }
    else {
        return '<button' . drupal_attributes($element['#attributes']) . '>'. $label ."</button>\n"; // This line break adds inherent margin between multiple buttons
    }
}

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
