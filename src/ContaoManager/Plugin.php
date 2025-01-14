<?php

namespace Guave\VisualRadioBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerBundle\ContaoManagerBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Guave\VisualRadioBundle\GuaveVisualRadioBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritDoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(GuaveVisualRadioBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, ContaoManagerBundle::class])
                ->setReplace(['visualradio']),
        ];
    }
}
