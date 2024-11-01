<?php
/**
 * Shareboost
 *
 * @package   Shareboost
 * @author    Ron Reiter <ron@shareboost.com>
 * @license   GPL-2.0+
 * @link      http://www.shareboost.com
 * @copyright 2013 Shareboost.com
 *
 * @shareboost-wordpress
 * Plugin Name: Shareboost
 * Plugin URI:  http://www.shareboost.com
 * Description: Increase social engagement.
 * Version:     1.0.0
 * Author:      Ron Reiter
 * Author URI:  http://www.shareboost.com
 * Text Domain: shareboost
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-shareboost-wordpress.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'Shareboost', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Shareboost', 'deactivate' ) );

Shareboost::get_instance();