<?php
/**
 * @file
 * builder_product_export.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function builder_product_export_taxonomy_default_vocabularies() {
  return array(
    'design_partnership' => array(
      'name' => 'Design Partnership',
      'machine_name' => 'design_partnership',
      'description' => 'if there is partnership between designer',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
    'template_color' => array(
      'name' => 'Template Color',
      'machine_name' => 'template_color',
      'description' => 'color skin of the template',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
