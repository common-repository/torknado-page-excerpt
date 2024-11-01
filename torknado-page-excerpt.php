<?php
/**
 * Plugin Name: Torknado Page Excerpt
 * Plugin URI:  https://torknado.com/plugin-torknado-page-excerpt/
 * Description: Allow to specify an Excerpt for Pages (not just Posts).
 * Version:     1.0
 * Author:      Tyler Tork
 * Author URI:  https://torknado.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Torknado Page Excerpt is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */
 
 // Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_post_type_support( 'page', 'excerpt' );
?>