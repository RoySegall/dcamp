<?php

/**
 * Plugin definition.
 */
$plugin = array(
  'title' => t('DrupalCamp links'),
  'description' => t('DrupalCamp social links.'),
  'category' => t('DrupalCamp'),
);

/**
 * Render callback.
 */
function dcamp_dcamp_links_content_type_render($subtype, $conf, $args, $context) {
  $block = new stdClass();
  $block->module = 'dcamnp';
  $items = array(
    l('', 'mailto:drupalcamp@drupal.org.il', array('attributes' => array('class' => array('mail')))),
    l('', 'http://www.drupal.org.il', array('attributes' => array('class' => array('drupal')))),
    l('', 'https://www.facebook.com/groups/drupalil/', array('attributes' => array('class' => array('facebook')))),
    l('', 'http://www.linkedin.com/groups/Drupal-Israel-753497/about', array('attributes' => array('class' => array('linkedin')))),
  );
  $block->content = "<div class='social-networks'>" . theme('item_list', array('items' => $items)) . "</div>";
  return $block;
}

/**
 * Edit form.
 */
function dcamp_dcamp_links_content_type_edit_form($form, &$form_state) {
  return $form;
}

