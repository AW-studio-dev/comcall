<?php
// index.php
require_once 'security.php';
require_once 'fixed/header.php';

$page = $_GET['page'] ?? 'acceuil';

$valid_pages = [
    'acceuil' => 'pages/acceuil.php',
    'a-propos-de-nous' => 'pages/a-propos-de-nous.php',
    'notre-expertise' => 'pages/notre-expertise.php',
    'nous-contact' => 'pages/nous-contact.php',
    'nous-rejoindre' => 'pages/nous-rejoindre.php'
];

if (array_key_exists($page, $valid_pages)) {
    require_once $valid_pages[$page];
} else {
    require_once 'pages/acceuil.php';
}

require_once 'fixed/footer.php';
?>