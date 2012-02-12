<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _dabernig_work_node_info() {
  $items = array(
    'text' => array(
      'name' => t('Text'),
      'module' => 'features',
      'description' => t(''),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Text'),
    ),
    'work' => array(
      'name' => t('Work'),
      'module' => 'features',
      'description' => t(''),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Text'),
    ),
  );
  return $items;
}
