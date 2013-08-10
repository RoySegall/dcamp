<?php

/**
 * Plugin definition.
 */
$plugin = array(
  'title' => t('DrupalCamp user tweets'),
  'description' => t('Display tweets of the user.'),
  'category' => t('DrupalCamp'),
  'required context' => new ctools_context_required(t('User'), 'user'),
);

/**
 * Render callback.
 */
function dcamp_user_tweets_content_type_render($subtype, $conf, $args, $context) {
  $block = new stdClass;

  $wrapper = entity_metadata_wrapper('user', $context->data);

  if (!empty($wrapper->field_twitter) && $screen_name = $wrapper->field_twitter->value()) {
    $view = views_embed_view('drupalcamp_tweets', 'panel_pane_1', $screen_name);
    $block->content = $view;
  }

  return $block;
}

/**
 * Edit form.
 */
function dcamp_user_tweets_content_type_edit_form($form, &$form_state) {
  return $form;
}

