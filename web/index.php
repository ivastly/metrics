<?php

use MeetMatt\Metrics\Server\Domain\Metrics\MetricsInterface;
use Slim\App;
use Slim\Container;

$timerStart = microtime(true);

require_once __DIR__ . '/../vendor/autoload.php';

$container = new Container(require __DIR__ . '/../app/server/config.php');

$services = require __DIR__ . '/../app/server/services.php';
foreach ($services as $service) {
    $container->register($service);
}

/** @var App $app */
$app = $container[App::class];
try
{
	$response = $app->run();
	$statusCode = $response->getStatusCode();
} catch (Throwable $exception) {
	$statusCode = 500;
}

fastcgi_finish_request();

// after response
$timerEnd = microtime(true);

/** @var MetricsInterface $metrics */
$metrics = $container[MetricsInterface::class];
$metrics->increment('request_count');
$metrics->timing('response_time', $timerEnd - $timerStart, ['code' => $statusCode]);
$metrics->flush();

