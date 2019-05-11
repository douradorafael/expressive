<?php

declare(strict_types=1);

namespace Announcements;

use Announcements\Handler;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Application;

class RoutesDelegator
{
    public function __invoke(ContainerInterface $containerInteface, $serviceName, callable $callback)
    {
        /* @var $app Application*/
       $app = $callback();

        $app->get('/announcements[/]', Handler\AnnoucementsCreateHandler::class, 'announcement.create');
        $app->get('/announcements/read/[page/{page:\d+}]', Handler\AnnoucementsReadHandler::class, 'announcement.readCOM');

        return $app;
    }

}