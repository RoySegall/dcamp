<?php
/**
 * @file
 * dcamp.features.inc
 */

require_once 'dcamp.features.field.inc';

/**
 * Implements hook_ctools_plugin_api().
 */
function dcamp_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function dcamp_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function dcamp_node_info() {
  $items = array(
    'slideshow' => array(
      'name' => t('SlideShow'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
