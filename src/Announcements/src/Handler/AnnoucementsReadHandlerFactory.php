<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Doctrine\ORM\EntityManager;
use Psr\Container\ContainerInterface;

class AnnoucementsReadHandlerFactory
{
    public function __invoke(ContainerInterface $container) : AnnoucementsReadHandler
    {
        /** @var EntityManager */
        $em = $container->get(EntityManager::class);

        $pageCount = $container->get('config')['page_size'];
        return new AnnoucementsReadHandler($em, $pageCount);
    }
}
