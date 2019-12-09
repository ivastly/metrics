<?php declare(strict_types=1);

namespace MeetMatt\Metrics\Server\Aop;

use Go\Core\AspectContainer;
use Go\Core\AspectKernel;
use MeetMatt\Metrics\Server\Aop\Aspect\MonitorAspect;

class ApplicationAspectKernel extends AspectKernel
{
	protected function configureAop(AspectContainer $container)
	{
		$container->registerAspect(new MonitorAspect());
	}
}
