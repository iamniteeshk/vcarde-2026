<?php

/**
 * Front controller used when the vhost document root is the project
 * directory (RunCloud's default webapp path) instead of public/.
 *
 * Existing files under public/ are served from here. Every other request
 * is handled by the Laravel application in public/index.php.
 */

$publicRoot = realpath(__DIR__.'/public');
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');

if ($publicRoot && $uri !== '/' && strpos($uri, "\0") === false) {
    $candidate = $publicRoot.DIRECTORY_SEPARATOR.ltrim($uri, '/');
    $resolved = realpath($candidate);

    $insidePublic = $resolved !== false
        && (strpos($resolved, $publicRoot.DIRECTORY_SEPARATOR) === 0)
        && is_file($resolved);

    if ($insidePublic) {
        $extension = strtolower(pathinfo($resolved, PATHINFO_EXTENSION));
        $directScripts = [
            '/geo.php',
            '/recaptcha-verify.php',
            '/activate-your-vcarde-nfc-card.php',
        ];

        if (in_array($uri, $directScripts, true)) {
            require $resolved;
            exit;
        }

        $blocked = [
            'php', 'phtml', 'phar', 'inc', 'env', 'ini', 'sql', 'log',
            'sh', 'bash', 'cgi', 'htaccess',
        ];

        if (! in_array($extension, $blocked, true)) {
            $types = [
                'css' => 'text/css; charset=UTF-8',
                'js' => 'text/javascript; charset=UTF-8',
                'mjs' => 'text/javascript; charset=UTF-8',
                'json' => 'application/json; charset=UTF-8',
                'svg' => 'image/svg+xml',
                'png' => 'image/png',
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'webp' => 'image/webp',
                'gif' => 'image/gif',
                'ico' => 'image/x-icon',
                'avif' => 'image/avif',
                'woff' => 'font/woff',
                'woff2' => 'font/woff2',
                'ttf' => 'font/ttf',
                'eot' => 'application/vnd.ms-fontobject',
                'html' => 'text/html; charset=UTF-8',
                'txt' => 'text/plain; charset=UTF-8',
                'xml' => 'application/xml; charset=UTF-8',
                'map' => 'application/json; charset=UTF-8',
                'webmanifest' => 'application/manifest+json',
                'mp4' => 'video/mp4',
                'pdf' => 'application/pdf',
                'wasm' => 'application/wasm',
            ];

            if (isset($types[$extension])) {
                header('Content-Type: '.$types[$extension]);
            }
            header('X-Content-Type-Options: nosniff');
            header('Content-Length: '.filesize($resolved));
            readfile($resolved);
            exit;
        }
    }
}

require __DIR__.'/public/index.php';
