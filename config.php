<?php
/**
 * Config.php — S.S SUPER MART Operations Configuration Endpoint
 *
 * Place this file in the same directory as ss_super_mart_ops.html.
 * On startup, loadScriptUrlFromConfigPhp() fetches this endpoint and
 * automatically populates the Google Apps Script Web App URL and Auto-Sync flag.
 */

// Prevent browser/proxy caching so URL updates apply immediately
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

// ============================================================================
// CONFIGURATION: Paste your deployed Google Apps Script Web App (/exec) URL below
// ============================================================================
$config = [
    'scriptUrl' => 'https://script.google.com/macros/s/AKfycbwNqfh88DAxlBWRrx2YIvpsS65P5RBbmDgMeDlqjqLVI8exDJakqj8OsIbRZvdCv9YXmA/exec',
    'autoSync'  => true
];

// Output JSON payload expected by ss_super_mart_ops.html
echo json_encode($config, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
exit;