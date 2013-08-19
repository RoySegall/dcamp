<?php
/**
 * @file
 * dcamp.features.inc
 */

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
 * Implements hook_image_default_styles().
 */
function dcamp_image_default_styles() {
  $styles = array();

  // Exported image style: slideshow.
  $styles['slideshow'] = array(
    'name' => 'slideshow',
    'effects' => array(
      1 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '900',
          'height' => '390',
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: user_image.
  $styles['user_image'] = array(
    'name' => 'user_image',
    'effects' => array(
      3 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '145',
          'height' => '145',
        ),
        'weight' => '1',
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function dcamp_node_info() {
  $items = array(
    'elements' => array(
      'name' => t('Elements'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('כותרת'),
      'help' => '',
    ),
    'slideshow' => array(
      'name' => t('SlideShow'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('כותרת'),
      'help' => '',
    ),
  );
  return $items;
}
