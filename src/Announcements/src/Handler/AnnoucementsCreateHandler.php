<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class AnnoucementsCreateHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $result['_result'] = [
            'success' => 'success',
            'status'  => 'ok',
            'code'    => '200'
        ];

        return new JsonResponse($result);
    }
}
