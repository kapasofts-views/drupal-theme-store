<?php
/**
 * @file
 * designssquare_product_export.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function designssquare_product_export_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'theme_display_export';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Theme Display Export';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Theme Display Export';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Description seo */
  $handler->display->display_options['fields']['field_description_seo']['id'] = 'field_description_seo';
  $handler->display->display_options['fields']['field_description_seo']['table'] = 'field_data_field_description_seo';
  $handler->display->display_options['fields']['field_description_seo']['field'] = 'field_description_seo';
  /* Field: Content: Design Url */
  $handler->display->display_options['fields']['field_design_url']['id'] = 'field_design_url';
  $handler->display->display_options['fields']['field_design_url']['table'] = 'field_data_field_design_url';
  $handler->display->display_options['fields']['field_design_url']['field'] = 'field_design_url';
  /* Field: Content: Designer Partnership */
  $handler->display->display_options['fields']['field_designer_partnership']['id'] = 'field_designer_partnership';
  $handler->display->display_options['fields']['field_designer_partnership']['table'] = 'field_data_field_designer_partnership';
  $handler->display->display_options['fields']['field_designer_partnership']['field'] = 'field_designer_partnership';
  /* Field: Content: Keywords Seo */
  $handler->display->display_options['fields']['field_keywords_seo']['id'] = 'field_keywords_seo';
  $handler->display->display_options['fields']['field_keywords_seo']['table'] = 'field_data_field_keywords_seo';
  $handler->display->display_options['fields']['field_keywords_seo']['field'] = 'field_keywords_seo';
  /* Field: Content: Line Item */
  $handler->display->display_options['fields']['field_line_item']['id'] = 'field_line_item';
  $handler->display->display_options['fields']['field_line_item']['table'] = 'field_data_field_line_item';
  $handler->display->display_options['fields']['field_line_item']['field'] = 'field_line_item';
  /* Field: Content: Product */
  $handler->display->display_options['fields']['field_product']['id'] = 'field_product';
  $handler->display->display_options['fields']['field_product']['table'] = 'field_data_field_product';
  $handler->display->display_options['fields']['field_product']['field'] = 'field_product';
  /* Field: Content: Title Seo */
  $handler->display->display_options['fields']['field_title_seo']['id'] = 'field_title_seo';
  $handler->display->display_options['fields']['field_title_seo']['table'] = 'field_data_field_title_seo';
  $handler->display->display_options['fields']['field_title_seo']['field'] = 'field_title_seo';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'template_display' => 'template_display',
  );
  /* Filter criterion: Content: Post date */
  $handler->display->display_options['filters']['created']['id'] = 'created';
  $handler->display->display_options['filters']['created']['table'] = 'node';
  $handler->display->display_options['filters']['created']['field'] = 'created';
  $handler->display->display_options['filters']['created']['operator'] = '>=';
  $handler->display->display_options['filters']['created']['value']['value'] = 'Wednesday, January 8, 2014';

  /* Display: Theme Display Export */
  $handler = $view->new_display('page', 'Theme Display Export', 'display_export');
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Description seo */
  $handler->display->display_options['fields']['field_description_seo']['id'] = 'field_description_seo';
  $handler->display->display_options['fields']['field_description_seo']['table'] = 'field_data_field_description_seo';
  $handler->display->display_options['fields']['field_description_seo']['field'] = 'field_description_seo';
  /* Field: Content: Design Url */
  $handler->display->display_options['fields']['field_design_url']['id'] = 'field_design_url';
  $handler->display->display_options['fields']['field_design_url']['table'] = 'field_data_field_design_url';
  $handler->display->display_options['fields']['field_design_url']['field'] = 'field_design_url';
  /* Field: Content: Designer Partnership */
  $handler->display->display_options['fields']['field_designer_partnership']['id'] = 'field_designer_partnership';
  $handler->display->display_options['fields']['field_designer_partnership']['table'] = 'field_data_field_designer_partnership';
  $handler->display->display_options['fields']['field_designer_partnership']['field'] = 'field_designer_partnership';
  /* Field: Content: Keywords Seo */
  $handler->display->display_options['fields']['field_keywords_seo']['id'] = 'field_keywords_seo';
  $handler->display->display_options['fields']['field_keywords_seo']['table'] = 'field_data_field_keywords_seo';
  $handler->display->display_options['fields']['field_keywords_seo']['field'] = 'field_keywords_seo';
  /* Field: Content: Title Seo */
  $handler->display->display_options['fields']['field_title_seo']['id'] = 'field_title_seo';
  $handler->display->display_options['fields']['field_title_seo']['table'] = 'field_data_field_title_seo';
  $handler->display->display_options['fields']['field_title_seo']['field'] = 'field_title_seo';
  /* Field: Content: Product */
  $handler->display->display_options['fields']['field_product']['id'] = 'field_product';
  $handler->display->display_options['fields']['field_product']['table'] = 'field_data_field_product';
  $handler->display->display_options['fields']['field_product']['field'] = 'field_product';
  $handler->display->display_options['fields']['field_product']['type'] = 'commerce_product_reference_sku_plain';
  $handler->display->display_options['fields']['field_product']['settings'] = array(
    'show_quantity' => 0,
    'default_quantity' => '1',
    'combine' => 1,
    'show_single_product_attributes' => 0,
    'line_item_type' => 0,
  );
  $handler->display->display_options['fields']['field_product']['delta_offset'] = '0';
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  /* Field: Content: Published */
  $handler->display->display_options['fields']['status']['id'] = 'status';
  $handler->display->display_options['fields']['status']['table'] = 'node';
  $handler->display->display_options['fields']['status']['field'] = 'status';
  $handler->display->display_options['fields']['status']['type'] = 'boolean';
  $handler->display->display_options['fields']['status']['not'] = 0;
  $handler->display->display_options['path'] = 'theme-display-export';
  $export['theme_display_export'] = $view;

  $view = new view();
  $view->name = 'theme_export';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'commerce_product';
  $view->human_name = 'Theme Export';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Theme Export';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Commerce Product: Product ID */
  $handler->display->display_options['fields']['product_id']['id'] = 'product_id';
  $handler->display->display_options['fields']['product_id']['table'] = 'commerce_product';
  $handler->display->display_options['fields']['product_id']['field'] = 'product_id';
  /* Filter criterion: Commerce Product: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'commerce_product';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'basic_template' => 'basic_template',
  );
  /* Filter criterion: Commerce Product: Created date */
  $handler->display->display_options['filters']['created']['id'] = 'created';
  $handler->display->display_options['filters']['created']['table'] = 'commerce_product';
  $handler->display->display_options['filters']['created']['field'] = 'created';

  /* Display: Themes Export */
  $handler = $view->new_display('page', 'Themes Export', 'product_export');
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '0';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Commerce Product: SKU */
  $handler->display->display_options['fields']['sku']['id'] = 'sku';
  $handler->display->display_options['fields']['sku']['table'] = 'commerce_product';
  $handler->display->display_options['fields']['sku']['field'] = 'sku';
  $handler->display->display_options['fields']['sku']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['sku']['link_to_product'] = 0;
  /* Field: Commerce Product: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'commerce_product';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_product'] = 0;
  /* Field: Commerce Product: Price */
  $handler->display->display_options['fields']['commerce_price']['id'] = 'commerce_price';
  $handler->display->display_options['fields']['commerce_price']['table'] = 'field_data_commerce_price';
  $handler->display->display_options['fields']['commerce_price']['field'] = 'commerce_price';
  $handler->display->display_options['fields']['commerce_price']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['commerce_price']['click_sort_column'] = 'amount';
  $handler->display->display_options['fields']['commerce_price']['type'] = 'commerce_price_raw_amount';
  $handler->display->display_options['fields']['commerce_price']['settings'] = array(
    'calculation' => '0',
  );
  /* Field: Commerce Product: Status */
  $handler->display->display_options['fields']['status']['id'] = 'status';
  $handler->display->display_options['fields']['status']['table'] = 'commerce_product';
  $handler->display->display_options['fields']['status']['field'] = 'status';
  $handler->display->display_options['fields']['status']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['status']['type'] = 'boolean';
  $handler->display->display_options['fields']['status']['not'] = 0;
  /* Field: Commerce Product: Template Type */
  $handler->display->display_options['fields']['field_template_type']['id'] = 'field_template_type';
  $handler->display->display_options['fields']['field_template_type']['table'] = 'field_data_field_template_type';
  $handler->display->display_options['fields']['field_template_type']['field'] = 'field_template_type';
  $handler->display->display_options['fields']['field_template_type']['label'] = 'Type';
  $handler->display->display_options['fields']['field_template_type']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Color */
  $handler->display->display_options['fields']['field_template_color']['id'] = 'field_template_color';
  $handler->display->display_options['fields']['field_template_color']['table'] = 'field_data_field_template_color';
  $handler->display->display_options['fields']['field_template_color']['field'] = 'field_template_color';
  $handler->display->display_options['fields']['field_template_color']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Mobile Support */
  $handler->display->display_options['fields']['field_mobile_support']['id'] = 'field_mobile_support';
  $handler->display->display_options['fields']['field_mobile_support']['table'] = 'field_data_field_mobile_support';
  $handler->display->display_options['fields']['field_mobile_support']['field'] = 'field_mobile_support';
  $handler->display->display_options['fields']['field_mobile_support']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Design Framework */
  $handler->display->display_options['fields']['field_design_framework']['id'] = 'field_design_framework';
  $handler->display->display_options['fields']['field_design_framework']['table'] = 'field_data_field_design_framework';
  $handler->display->display_options['fields']['field_design_framework']['field'] = 'field_design_framework';
  $handler->display->display_options['fields']['field_design_framework']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: featured image */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = 'Featured Image';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'url_type' => '3',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Commerce Product: featured image magnified */
  $handler->display->display_options['fields']['field_featured_image_magnified']['id'] = 'field_featured_image_magnified';
  $handler->display->display_options['fields']['field_featured_image_magnified']['table'] = 'field_data_field_featured_image_magnified';
  $handler->display->display_options['fields']['field_featured_image_magnified']['field'] = 'field_featured_image_magnified';
  $handler->display->display_options['fields']['field_featured_image_magnified']['label'] = 'Featured Image Magnified';
  $handler->display->display_options['fields']['field_featured_image_magnified']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image_magnified']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image_magnified']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_featured_image_magnified']['settings'] = array(
    'url_type' => '3',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Commerce Product: other images */
  $handler->display->display_options['fields']['field_other_images']['id'] = 'field_other_images';
  $handler->display->display_options['fields']['field_other_images']['table'] = 'field_data_field_other_images';
  $handler->display->display_options['fields']['field_other_images']['field'] = 'field_other_images';
  $handler->display->display_options['fields']['field_other_images']['label'] = 'Other Images';
  $handler->display->display_options['fields']['field_other_images']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_other_images']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_other_images']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  $handler->display->display_options['fields']['field_other_images']['delta_offset'] = '0';
  /* Field: Commerce Product: is featured design */
  $handler->display->display_options['fields']['field_is_featured_design']['id'] = 'field_is_featured_design';
  $handler->display->display_options['fields']['field_is_featured_design']['table'] = 'field_data_field_is_featured_design';
  $handler->display->display_options['fields']['field_is_featured_design']['field'] = 'field_is_featured_design';
  $handler->display->display_options['fields']['field_is_featured_design']['label'] = 'Is Featured Design';
  $handler->display->display_options['fields']['field_is_featured_design']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Category */
  $handler->display->display_options['fields']['field_category']['id'] = 'field_category';
  $handler->display->display_options['fields']['field_category']['table'] = 'field_data_field_category';
  $handler->display->display_options['fields']['field_category']['field'] = 'field_category';
  $handler->display->display_options['fields']['field_category']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_category']['delta_offset'] = '0';
  /* Field: Commerce Product: Description */
  $handler->display->display_options['fields']['field_description']['id'] = 'field_description';
  $handler->display->display_options['fields']['field_description']['table'] = 'field_data_field_description';
  $handler->display->display_options['fields']['field_description']['field'] = 'field_description';
  $handler->display->display_options['fields']['field_description']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Is On Sale */
  $handler->display->display_options['fields']['field_is_on_sale']['id'] = 'field_is_on_sale';
  $handler->display->display_options['fields']['field_is_on_sale']['table'] = 'field_data_field_is_on_sale';
  $handler->display->display_options['fields']['field_is_on_sale']['field'] = 'field_is_on_sale';
  $handler->display->display_options['fields']['field_is_on_sale']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Is New Product */
  $handler->display->display_options['fields']['field_is_new_product']['id'] = 'field_is_new_product';
  $handler->display->display_options['fields']['field_is_new_product']['table'] = 'field_data_field_is_new_product';
  $handler->display->display_options['fields']['field_is_new_product']['field'] = 'field_is_new_product';
  $handler->display->display_options['fields']['field_is_new_product']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Demo Url */
  $handler->display->display_options['fields']['field_demo_url']['id'] = 'field_demo_url';
  $handler->display->display_options['fields']['field_demo_url']['table'] = 'field_data_field_demo_url';
  $handler->display->display_options['fields']['field_demo_url']['field'] = 'field_demo_url';
  $handler->display->display_options['fields']['field_demo_url']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Hide Demo Header */
  $handler->display->display_options['fields']['field_hide_demo_header']['id'] = 'field_hide_demo_header';
  $handler->display->display_options['fields']['field_hide_demo_header']['table'] = 'field_data_field_hide_demo_header';
  $handler->display->display_options['fields']['field_hide_demo_header']['field'] = 'field_hide_demo_header';
  $handler->display->display_options['fields']['field_hide_demo_header']['element_label_colon'] = FALSE;
  /* Field: Commerce Product: Design Owner */
  $handler->display->display_options['fields']['field_design_owner']['id'] = 'field_design_owner';
  $handler->display->display_options['fields']['field_design_owner']['table'] = 'field_data_field_design_owner';
  $handler->display->display_options['fields']['field_design_owner']['field'] = 'field_design_owner';
  $handler->display->display_options['fields']['field_design_owner']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_design_owner']['settings'] = array(
    'link' => 0,
  );
  /* Field: Commerce Product: Design Price */
  $handler->display->display_options['fields']['field_design_price']['id'] = 'field_design_price';
  $handler->display->display_options['fields']['field_design_price']['table'] = 'field_data_field_design_price';
  $handler->display->display_options['fields']['field_design_price']['field'] = 'field_design_price';
  $handler->display->display_options['fields']['field_design_price']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_design_price']['click_sort_column'] = 'amount';
  $handler->display->display_options['fields']['field_design_price']['settings'] = array(
    'calculation' => FALSE,
  );
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Commerce Product: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'commerce_product';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'basic_template' => 'basic_template',
  );
  /* Filter criterion: Commerce Product: Created date */
  $handler->display->display_options['filters']['created']['id'] = 'created';
  $handler->display->display_options['filters']['created']['table'] = 'commerce_product';
  $handler->display->display_options['filters']['created']['field'] = 'created';
  $handler->display->display_options['filters']['created']['operator'] = '>=';
  $handler->display->display_options['filters']['created']['value']['value'] = 'Wednesday, January 8, 2014';
  $handler->display->display_options['filters']['created']['expose']['operator_id'] = 'created_op';
  $handler->display->display_options['filters']['created']['expose']['label'] = 'Created date';
  $handler->display->display_options['filters']['created']['expose']['use_operator'] = TRUE;
  $handler->display->display_options['filters']['created']['expose']['operator'] = 'created_op';
  $handler->display->display_options['filters']['created']['expose']['identifier'] = 'created';
  $handler->display->display_options['filters']['created']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
  );
  $handler->display->display_options['path'] = 'theme-export';
  $export['theme_export'] = $view;

  return $export;
}
