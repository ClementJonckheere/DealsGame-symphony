<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\AnnounceRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AnnounceExtension extends AbstractExtension
{

    public function getFunctions(): array
    {
        return [
            new TwigFunction('Announce', [AnnounceRuntime::class, 'getAnnounce']),
        ];
    }
}
