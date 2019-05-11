<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class AnnoucementsReadHandler implements RequestHandlerInterface
{
    /** @var EntityManager */
    private $em;

    private $pageCount;
    public function __construct(EntityManager $em, $pageCount)
    {
        $this->em = $em;
        $this->pageCount = $pageCount;
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $repository = $this->em->getRepository('Announcements\Entity\Anuncio');

        $query = $repository
            ->createQueryBuilder('a')
            ->getQuery();

        $paginator = new Paginator($query);

        $totalItems = count($paginator);
        $currentPage = ($request->getAttribute('page')) ?: 1;
        $totalPageCount = ceil($totalItems / $this->pageCount);
        $nextPage = (($currentPage < $totalPageCount) ? $currentPage + 1 : $totalPageCount);
        $previousPage = (($currentPage > 1) ? $currentPage - 1 : 1);


        $records = $paginator
            ->getQuery()
            ->setFirstResult($this->pageCount * ($currentPage-1))
            ->setMaxResults($this->pageCount)
            ->getResult(Query::HYDRATE_ARRAY);

        return new JsonResponse($records);
    }
}
