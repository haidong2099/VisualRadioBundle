<?php

namespace Guave\VisualRadioBundle;

use Guave\VisualRadioBundle\DependencyInjection\GuaveVisualRadioExtension;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuaveVisualRadioBundle extends Bundle
{
    /**
     * Register extension
     *
     * @return Extension
     */
    public function getContainerExtension(): Extension
    {
        return new GuaveVisualRadioExtension();
    }
}
