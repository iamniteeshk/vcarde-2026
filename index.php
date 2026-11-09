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

// Serve crawl files from PHP so Cloudflare cannot keep a multi-hour stale
// robots.txt (placeholder Sitemap URLs previously blocked discovery).
if ($publicRoot && in_array($uri, ['/robots.txt', '/sitemap.xml'], true)) {
    $crawlFile = $publicRoot.$uri;
    if (is_file($crawlFile)) {
        $type = $uri === '/robots.txt'
            ? 'text/plain; charset=UTF-8'
            : 'application/xml; charset=UTF-8';
        header('Content-Type: '.$type);
        header('X-Content-Type-Options: nosniff');
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('CDN-Cache-Control: no-store');
        header('Cloudflare-CDN-Cache-Control: no-store');
        header('Content-Length: '.filesize($crawlFile));
        readfile($crawlFile);
        exit;
    }
}

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
            // Keep crawl files fresh at Cloudflare / browsers. Stale robots.txt
            // with placeholder Sitemap URLs blocks indexing.
            if (in_array($uri, ['/robots.txt', '/sitemap.xml', '/spa-home/robots.txt', '/spa-home/sitemap.xml'], true)) {
                header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
                header('Pragma: no-cache');
                header('CDN-Cache-Control: no-store');
                header('Cloudflare-CDN-Cache-Control: no-store');
            }
            header('Content-Length: '.filesize($resolved));
            readfile($resolved);
            exit;
        }
    }
}

/*
 * The React homepage lives here, before Laravel. An InfyOm upload replaces
 * routes/web.php and its stock "/" route sends visitors to /login. This
 * file stays in place across those uploads, so the public site keeps loading
 * on vcarde.com. Other hostnames still fall through to Laravel (custom domains
 * open the matching vCard).
 */
$host = strtolower((string) preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));
$method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
$spaPath = trim($uri, '/');
$spaPages = [
    'about',
    'faq',
    'templates',
    'press',
    'nfc-cards',
    'nfc-business-cards',
    'nfc-business-card-guide',
    'contact',
    'pvc-nfc-business-card',
    'metal-nfc-business-card',
    'nfc-google-reviews',
    'nfc-vs-qr',
    'qr-code-generator',
    'nfc-card-near',
];
$isSpaPage = $spaPath === ''
    || in_array($spaPath, $spaPages, true)
    || preg_match('#^nfc-card-near/[a-z0-9-]+$#', $spaPath) === 1;

if (
    in_array($host, ['vcarde.com', 'www.vcarde.com'], true)
    && in_array($method, ['GET', 'HEAD'], true)
    && $isSpaPage
    && $publicRoot
) {
    $spaHome = $publicRoot.'/spa-home/index.html';
    $spaSeo = $publicRoot.'/spa-home/seo.php';
    if (is_file($spaHome)) {
        $html = (string) file_get_contents($spaHome);
        if (is_file($spaSeo)) {
            require_once $spaSeo;
            $html = vcarde_spa_seo_apply($html, $uri);
        }
        header('Content-Type: text/html; charset=UTF-8');
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('CDN-Cache-Control: no-store');
        header('X-Content-Type-Options: nosniff');
        header('Content-Length: '.strlen($html));
        if ($method !== 'HEAD') {
            echo $html;
        }
        exit;
    }
}

require __DIR__.'/public/index.php';
