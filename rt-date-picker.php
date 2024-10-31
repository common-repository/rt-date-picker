<?php
/*
Plugin Name: Royal Date Picker
Plugin URI: http://wordpress.org/plugins/rt-date-picker/
Description: Date Picker for WP7 or others When use specific IDs (#rtdate, #startdate, #enddate, #eventdate)
Author: Mehdi Akram
Version: 1.0
Author URI: http://shamokaldarpon.com/
*/


/*Some Set-up*/
define('RT_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


/* Adding jquery Core. datepicker for plugin */
wp_enqueue_script('date-picker-js2', RT_PLUGIN_PATH.'lib/ui/jquery.ui.core.js', array('jquery'));
wp_enqueue_script('date-picker-js3', RT_PLUGIN_PATH.'lib/ui/jquery.ui.datepicker.js', array('jquery'));

/* Acive Code */
wp_enqueue_script('date-picker-active', RT_PLUGIN_PATH.'lib/active.js');

/* Adding Plugin custm CSS file */
wp_enqueue_style('date-picker-style', RT_PLUGIN_PATH.'lib/themes/ui-lightness/jquery.ui.all.css');

?>