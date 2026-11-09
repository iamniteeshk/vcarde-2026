<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

/*
 * Serve the React homepage before Laravel boots. InfyOm's stock "/" route
 * redirects to /login, and an update replaces routes/web.php. This file is
 * kept in place so vcarde.com keeps opening the public site. Any other
 * hostname falls through so a custom domain still opens its vCard.
 */
$host = strtolower((string) preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));
$method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
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
) {
    $spaHome = __DIR__.'/spa-home/index.html';
    $spaSeo = __DIR__.'/spa-home/seo.php';
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


define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
