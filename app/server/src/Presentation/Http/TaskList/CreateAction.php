<?php

namespace MeetMatt\Metrics\Server\Presentation\Http\TaskList;

use MeetMatt\Metrics\Server\Domain\TaskList\TaskListService;
use MeetMatt\Metrics\Server\Presentation\Http\ActionAbstract;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CreateAction extends ActionAbstract
{
    /** @var TaskListService */
    private $taskListService;

    public function __construct(TaskListService $taskListService)
    {
        $this->taskListService = $taskListService;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        array $arguments = []
    ): ResponseInterface
    {
        $body = $this->getJsonBody($request, ['name']);

        $taskList = $this->taskListService->create($this->getUserId($request), $body['name']);

        return $this->withJson(
            $response,
            [
                'id' => $taskList->getId(),
                'name' => $taskList->getName(),
            ],
            201
        );
    }
}