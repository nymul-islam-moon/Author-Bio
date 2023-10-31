<?php

/**
 * Author-Bio
 *
 * @package           Author-Bio
 * @author            Nymul Islam Moon
 * @copyright         2023 Nymul Islam
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Author-Bio
 * Plugin URI:        https://github.com/nymul-islam-moon
 * Description:       It will contains author information and additional links
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nymul Islam Moon
 * Author URI:        https://github.com/nymul-islam-moon
 * Text Domain:       author-bio
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/nymul-islam-moon
 */

if ( !defined( 'ABSPATH' ) ) {
    die( 'You are not allow to access this area' );
}

/**
 * Include the profile from admin if the user is admin.
 */
if ( is_admin() ) {
    require_once dirname(  __FILE__ ) . '/includes/admin/profile.php';
}