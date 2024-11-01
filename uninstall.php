<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Shareboost
 * @author    Ron Reiter <ron@shareboost.com>
 * @license   GPL-2.0+
 * @link      http://www.shareboost.com
 * @copyright 2013 Shareboost
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// TODO: Define uninstall functionality here