<?php
/**
 * @file
 * designssquare_product_import.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function designssquare_product_import_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'themes_display_importer';
  $feeds_importer->config = array(
    'name' => 'Themes Display Importer',
    'description' => 'importer for importing theme displays',
    'fetcher' => array(
      'plugin_key' => 'FeedsFileFetcher',
      'config' => array(
        'allowed_extensions' => 'txt csv tsv xml opml',
        'direct' => 0,
        'directory' => 'private://feeds',
        'allowed_schemes' => array(
          'public' => 'public',
          'private' => 'private',
        ),
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsCSVParser',
      'config' => array(
        'delimiter' => ',',
        'no_headers' => 0,
      ),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsNodeProcessor',
      'config' => array(
        'expire' => '-1',
        'author' => '851',
        'authorize' => 1,
        'mappings' => array(
          0 => array(
            'source' => 'Title',
            'target' => 'title',
            'unique' => FALSE,
          ),
          1 => array(
            'source' => 'Description seo',
            'target' => 'field_description_seo',
            'unique' => FALSE,
          ),
          2 => array(
            'source' => 'Design Url',
            'target' => 'field_design_url',
            'unique' => FALSE,
          ),
          3 => array(
            'source' => 'Designer Partnership',
            'target' => 'field_designer_partnership',
            'unique' => FALSE,
          ),
          4 => array(
            'source' => 'Title Seo',
            'target' => 'field_title_seo',
            'unique' => FALSE,
          ),
          5 => array(
            'source' => 'Product',
            'target' => 'field_product:sku',
            'unique' => FALSE,
          ),
          6 => array(
            'source' => 'Path',
            'target' => 'path_alias',
            'unique' => FALSE,
          ),
          7 => array(
            'source' => 'Published',
            'target' => 'status',
            'unique' => FALSE,
          ),
          8 => array(
            'source' => 'Keywords Seo',
            'target' => 'field_keywords_seo',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '0',
        'input_format' => 'full_html',
        'skip_hash_check' => 0,
        'bundle' => 'template_display',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '-1',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['themes_display_importer'] = $feeds_importer;

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'themes_product_importer';
  $feeds_importer->config = array(
    'name' => 'Themes Product Importer',
    'description' => 'importer for importing themes',
    'fetcher' => array(
      'plugin_key' => 'FeedsFileFetcher',
      'config' => array(
        'allowed_extensions' => 'txt csv tsv xml opml',
        'direct' => FALSE,
        'directory' => 'private://feeds',
        'allowed_schemes' => array(
          0 => 'public',
          1 => 'private',
        ),
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsCSVParser',
      'config' => array(
        'delimiter' => ',',
        'no_headers' => 0,
      ),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsCommerceProductProcessor',
      'config' => array(
        'product_type' => 'basic_template',
        'author' => '851',
        'tax_rate' => TRUE,
        'mappings' => array(
          0 => array(
            'source' => 'SKU',
            'target' => 'guid',
            'unique' => 1,
          ),
          1 => array(
            'source' => 'SKU',
            'target' => 'sku',
            'unique' => 0,
          ),
          2 => array(
            'source' => 'Title',
            'target' => 'title',
            'unique' => FALSE,
          ),
          3 => array(
            'source' => 'Price',
            'target' => 'commerce_price:amount',
            'unique' => FALSE,
          ),
          4 => array(
            'source' => 'Status',
            'target' => 'status',
            'unique' => FALSE,
          ),
          5 => array(
            'source' => 'Type',
            'target' => 'field_template_type',
            'unique' => FALSE,
          ),
          6 => array(
            'source' => 'Color',
            'target' => 'field_template_color',
            'unique' => FALSE,
          ),
          7 => array(
            'source' => 'Mobile Support',
            'target' => 'field_mobile_support',
            'unique' => FALSE,
          ),
          8 => array(
            'source' => 'Design Framework',
            'target' => 'field_design_framework',
            'unique' => FALSE,
          ),
          9 => array(
            'source' => 'Featured Image',
            'target' => 'field_featured_image',
            'unique' => FALSE,
          ),
          10 => array(
            'source' => 'Featured Image Magnified',
            'target' => 'field_featured_image_magnified',
            'unique' => FALSE,
          ),
          11 => array(
            'source' => 'Other Image',
            'target' => 'field_other_images',
            'unique' => FALSE,
          ),
          12 => array(
            'source' => 'Is Featured Design',
            'target' => 'field_is_featured_design',
            'unique' => FALSE,
          ),
          13 => array(
            'source' => 'Category',
            'target' => 'field_category',
            'unique' => FALSE,
          ),
          14 => array(
            'source' => 'Description',
            'target' => 'field_description',
            'unique' => FALSE,
          ),
          15 => array(
            'source' => 'Is On Sale',
            'target' => 'field_is_on_sale',
            'unique' => FALSE,
          ),
          16 => array(
            'source' => 'Is New Product',
            'target' => 'field_is_new_product',
            'unique' => FALSE,
          ),
          17 => array(
            'source' => 'Demo Url',
            'target' => 'field_demo_url',
            'unique' => FALSE,
          ),
          18 => array(
            'source' => 'Hide Demo Header',
            'target' => 'field_hide_demo_header',
            'unique' => FALSE,
          ),
          19 => array(
            'source' => 'Design Owner',
            'target' => 'field_design_owner:etid',
            'unique' => FALSE,
          ),
          20 => array(
            'source' => 'Design Price',
            'target' => 'field_design_price:amount',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '0',
        'input_format' => 'full_html',
        'skip_hash_check' => 0,
        'bundle' => 'basic_template',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '-1',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['themes_product_importer'] = $feeds_importer;

  return $export;
}
