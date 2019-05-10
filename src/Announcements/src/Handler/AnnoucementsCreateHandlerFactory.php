<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Psr\Container\ContainerInterface;

class AnnoucementsCreateHandlerFactory
{
    public function __invoke(ContainerInterface $container) : AnnoucementsCreateHandler
    {
        return new AnnoucementsCreateHandler();
    }
}
