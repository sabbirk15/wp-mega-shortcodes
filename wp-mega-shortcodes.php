<?php
/*
  Plugin Name: WP Mega Shortcodes
  Plugin URI: http://rewardthemes.com/wp-mega-shortcodes
  Version: 1.0.0
  Author: Sabbir Hasan
  Author URI: http://www.sabbirh.com/
  Description: Mega Shortcodes Plugin For WordPress
  Text Domain: wpmgs
  Domain Path: /languages
  License: GPL
 */

// Define plugin file constant
define( 'SU_PLUGIN_FILE', __FILE__ );
define( 'SU_PLUGIN_VERSION', '1.0.0' );
define( 'SU_ENABLE_CACHE', false );

// Includes
require_once 'inc/vendor/sunrise.php';
require_once 'inc/core/admin-views.php';
require_once 'inc/core/requirements.php';
require_once 'inc/core/load.php';
require_once 'inc/core/assets.php';
require_once 'inc/core/shortcodes.php';
require_once 'inc/core/tools.php';
require_once 'inc/core/data.php';
require_once 'inc/core/generator-views.php';
require_once 'inc/core/generator.php';
require_once 'inc/core/widget.php';
require_once 'inc/core/vote.php';
require_once 'inc/core/counters.php';
