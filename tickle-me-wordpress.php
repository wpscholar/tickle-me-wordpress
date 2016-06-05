<?php

/*
 * Plugin Name: Tickle Me WordPress
 * Plugin URI: https://wpscholar.com/wordpress-plugins/tickle-me-wordpress/
 * Description: Tickle Me WordPress is a fun security plugin.  As of WordPress 3.0 and higher, the WordPress login form shakes back and forth on failed logins.  Rather than return helpful error messages to potential hackers, this plugin returns the message "Oh... that tickles!" instead.
 * Version: 1.1.1
 * Author: Micah Wood
 * Author URI: https://wpscholar.com/
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Copyright 2014-2016 by Micah Wood - All rights reserved.
 */

add_filter( 'login_errors', create_function( null, "return 'Oh... that tickles!';" ) );