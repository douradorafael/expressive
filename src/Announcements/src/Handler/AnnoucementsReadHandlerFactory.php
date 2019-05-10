<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Psr\Container\ContainerInterface;

class AnnoucementsReadHandlerFactory
{
    public function __invoke(ContainerInterface $container) : AnnoucementsReadHandler
    {
        return new AnnoucementsReadHandler();
    }
}
