<?php
/** 
 * Check PHP version.
 */
if (version_compare(PHP_VERSION, '5.4', '<')) {
    throw new Exception('PHP version >= 5.4 required');
}

// Check PHP Curl & json decode capabilities.
if (!function_exists('curl_init') || !function_exists('curl_exec')) {
    throw new Exception('Midtrans needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('Midtrans needs the JSON PHP extension.');
}

// Configurations
include(app_path() . '\Config.php');

// Midtrans API Resources
include(app_path() . '\Transaction.php');

// Plumbing
include(app_path() . '\ApiRequestor.php');
include(app_path() . '\SnapApiRequestor.php');
include(app_path() . '\Notification.php');
include(app_path() . '\CoreApi.php');
include(app_path() . '\Snap.php');

// Sanitization
include(app_path() . '\Sanitizer.php');
