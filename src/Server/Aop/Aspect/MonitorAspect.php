<?php declare(strict_types=1);

namespace MeetMatt\Metrics\Server\Aop\Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

class MonitorAspect implements Aspect
{
	/* @noinspection PhpUnused */
	/**
	 * Method that will be called before real method
	 *
	 * @param MethodInvocation $invocation Invocation
	 * @Before("execution(public MeetMatt\Metrics\Server\Domain\User\LoginService->*(*))")
	 */
	public function beforeMethodExecution(MethodInvocation $invocation): void
	{
		echo "\n" . 'Calling Before Interceptor for: ',
		$invocation,
		' with arguments: ',
		json_encode($invocation->getArguments(), JSON_THROW_ON_ERROR),
		"\n";
	}
}
