<?php
declare(strict_types=1);

/**
 * Single front controller: maps clean URLs (/about, /gallery, ...) to page
 * templates in pages/, each of which pulls in includes/header.php and
 * includes/footer.php for the shared site layout.
 * Designed with the help of Chisanga Innocent
 */

$validPages = [
  'about', 'academics', 'admissions', 'classroom', 'community', 'contact',
  'cultural', 'drnene', 'events', 'gallery', 'graduation', 'muziya', 'news',
  'privacy', 'schedule', 'science', 'sports', 'staff',
];

$path = trim((string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$slug = $path === '' ? 'home' : $path;

if ($slug !== 'home' && !in_array($slug, $validPages, true)) {
  http_response_code(404);
  $slug = '404';
}

require __DIR__ . "/pages/{$slug}.php";
