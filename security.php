<?php
// security.php
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");

// For form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) !== $_SERVER['HTTP_HOST']) {
        die('Form submission from unauthorized domain');
    }
    
    // Basic anti-spam
    if (!empty($_POST['website'])) die(); // Honeypot
    if (isset($_POST['submit']) && time() - $_POST['submit_time'] < 3) die();
}
?>