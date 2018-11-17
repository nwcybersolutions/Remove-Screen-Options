<?php

/*
Plugin Name: Remove Screen Options
Plugin URI: https://github.com/nwcybersolutions/Remove-Screen-Options
Description: Removes Screen Options Globally
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Remove Screen Options
Domain Path: /languages
*/
add_filter('screen_options_show_screen', '__return_false');
