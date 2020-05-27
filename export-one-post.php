<?php
/*
 * Plugin Name: Export One Post
 * Plugin URI: https://github.com/drawbackwards/export-one-post
 * Description: Export single posts and pages from the edit screen.
 * Version: 1.0
 * Author: Drawbackwards
 * Author URI: drawbackwards.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * TextDomain: export-one-post
 * DomainPath:
 * Network:
 */

require_once( __DIR__ . '/class-export-one-post.php' );

$export_one_post = new Export_One_Post();
