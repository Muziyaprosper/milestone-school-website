<?php
/**
 * Router for PHP's built-in dev server (php -S host:port router.php).
 * Mirrors the .htaccess rewrite rules used on the live Apache/cPanel host,
 * so clean URLs (e.g. /about) behave the same locally as in production.
 * Not used in production - Apache reads .htaccess there instead.
 */

$uri = urldecode((string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Block direct access to internal templates, matching .htaccess
if (preg_match('#^/(includes|pages)/#', $uri)) {
  http_response_code(403);
  echo 'Forbidden';
  return true;
}

$file = __DIR__ . $uri;
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
  return false; // let the built-in server serve static files (assets, css, js...) as-is
}

require __DIR__ . '/index.php';
