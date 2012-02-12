<?php

/**
 * Implementation of hook_content_default_fields().
 */
function dabernig_work_content_default_fields() {
  module_load_include('inc', 'dabernig_work', 'dabernig_work.defaults');
  $args = func_get_args();
  return call_user_func_array('_dabernig_work_content_default_fields', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function dabernig_work_ctools_plugin_api() {
  module_load_include('inc', 'dabernig_work', 'dabernig_work.defaults');
  $args = func_get_args();
  return call_user_func_array('_dabernig_work_ctools_plugin_api', $args);
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function dabernig_work_imagecache_default_presets() {
  module_load_include('inc', 'dabernig_work', 'dabernig_work.defaults');
  $args = func_get_args();
  return call_user_func_array('_dabernig_work_imagecache_default_presets', $args);
}

/**
 * Implementation of hook_node_info().
 */
function dabernig_work_node_info() {
  module_load_include('inc', 'dabernig_work', 'dabernig_work.features.node');
  $args = func_get_args();
  return call_user_func_array('_dabernig_work_node_info', $args);
}

/**
 * Implementation of hook_default_page_manager_handlers().
 */
function dabernig_work_default_page_manager_handlers() {
  module_load_include('inc', 'dabernig_work', 'dabernig_work.defaults');
  $args = func_get_args();
  return call_user_func_array('_dabernig_work_default_page_manager_handlers', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function dabernig_work_views_default_views() {
  module_load_include('inc', 'dabernig_work', 'dabernig_work.features.views');
  $args = func_get_args();
  return call_user_func_array('_dabernig_work_views_default_views', $args);
}
