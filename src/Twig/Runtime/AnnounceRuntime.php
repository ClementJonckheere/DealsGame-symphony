<?php

namespace App\Twig\Runtime;

use App\Repository\AnnounceRepository;
use Twig\Extension\RuntimeExtensionInterface;

class AnnounceRuntime implements RuntimeExtensionInterface
{
    public function __construct(private AnnounceRepository $announceRepository)
    {
        // Inject dependencies if needed
    }

    public function doSomething()
    {
        return $this->announceRepository
            ->createQueryBuilder('a')
            ->select('a.id', 'a.name')
            ->orderBy('a.name', 'ASC')
            ->getQuery()
            ->getResult();

    }
}
