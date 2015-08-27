<?php

//
//Custom settings
//----------------------

function my_attributes_dropdown_pages_args($dropdown_args) {
  $dropdown_args['post_status'] = array('publish','draft');
  return $dropdown_args;
}

function add_categories_to_pages(){
  add_meta_box(   'categorydiv', __('Categories'), 'post_categories_meta_box', 
        'page', 'side', 'core');
  register_taxonomy_for_object_type('category', 'page');
}

function post_type_defaults( $defaults ) {
 
  $defaults['resources'] = false;
  $defaults['guides'] = false;
  $defaults['kb'] = false;
  $defaults['api'] = false;
  $defaults['help_docs'] = false;
  $defaults['jobs'] = false;
  $defaults['campaigns'] = false;
  $defaults['product_updates'] = false;
 
  return $defaults;
}
add_filter( 'genesis_theme_settings_defaults', 'post_type_defaults' );

function register_post_type_sanitzation_filters() {
  genesis_add_option_filter( 
    'no_html', 
    GENESIS_SETTINGS_FIELD,
    array(
      'resources',
      'guides',
      'api',
      'help_docs',
      'kb',
      'jobs',
      'campaigns',
      'product_updates'
    ) 
  );
}
add_action( 'genesis_settings_sanitizer_init', 'register_post_type_sanitzation_filters' );

function register_post_types_box( $_genesis_theme_settings_pagehook ) {
  add_meta_box( 'post-types-box', 'Custom Post Types', 'post_types_box', $_genesis_theme_settings_pagehook, 'main', 'high' );
}
add_action( 'genesis_theme_settings_metaboxes', 'register_post_types_box' );

function post_types_box() {
  ?>
 
  <p><?php _e( 'Guides:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[guides]" value='1' <?php checked(1, genesis_get_option('guides') ); ?> /> </p>
 
  <p><?php _e( 'Resources:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[resources]" value='1' <?php checked(1, genesis_get_option('resources') ); ?> /> </p>
 
  <p><?php _e( 'Help Docs:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[help_docs]" value='1' <?php checked(1, genesis_get_option('help_docs') ); ?> /> </p>
 
  <p><?php _e( 'API Docs:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[api]" value='1' <?php checked(1, genesis_get_option('api') ); ?> /> </p>
 
  <p><?php _e( 'KB:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[kb]" value='1' <?php checked(1, genesis_get_option('kb') ); ?> /> </p>

  <p><?php _e( 'Jobs:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[jobs]" value='1' <?php checked(1, genesis_get_option('jobs') ); ?> /> </p>

  <p><?php _e( 'Campaigns:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[campaigns]" value='1' <?php checked(1, genesis_get_option('campaigns') ); ?> /> </p>

  <p><?php _e( 'Product updates:', 'be-genesis-child' );?>
  <input type="checkbox" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[product_updates]" value='1' <?php checked(1, genesis_get_option('product_updates') ); ?> /> </p>

  <?php
}

?>