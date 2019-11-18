<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/soil/soil.php', // Soil
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/customposts.php',     // Custom post and taxonomy definition
  'lib/custom.php'     // Custom code

];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'viars'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);




/**
 * Disable individual theme update notification WordPress
 */
function disable_theme_update_notification( $value ) {
    if ( isset( $value ) && is_object( $value ) ) {
        unset( $value->response['viars'] );
    }
    return $value;
}
add_filter( 'site_transient_update_themes', 'disable_theme_update_notification' );
