<?php declare(strict_types=1);

use MeetMatt\Metrics\Server\Aop\ApplicationAspectKernel;
use MeetMatt\Metrics\Server\Domain\Metrics\MetricsInterface;
use Slim\App;
use Slim\Container;

$timerStart = microtime(true);

require_once __DIR__ . '/../vendor/autoload.php';

// Initialize an application aspect container
$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(
	[
		'debug'        => true, // use 'false' for production mode
		'appDir'       => __DIR__ . '/..',
		'cacheDir'     => __DIR__ . '/../app/cache',
		'includePaths' => [
			__DIR__ . '/../src/',
		],
	]
);

$container = new Container(require __DIR__ . '/../app/server/config.php');

$services = require __DIR__ . '/../app/server/services.php';
foreach ($services as $service)
{
	$container->register($service);
}

/** @var App $app */
$app = $container[App::class];
try
{
	$response   = $app->run();
	$statusCode = $response->getStatusCode();
}
catch (Throwable $exception)
{
	$statusCode = 500;
}

fastcgi_finish_request();

// after response
$timerEnd = microtime(true);

/** @var MetricsInterface $metrics */
$metrics = $container[MetricsInterface::class];
$metrics->increment('api.calls.count');
$metrics->increment('api.response_status.count', ['code' => $statusCode]);
$metrics->microtiming('api.response.time', $timerEnd - $timerStart);
$metrics->flush();

