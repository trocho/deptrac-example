<?php

declare(strict_types=1);

namespace Module\Bar\Infrastructure;

use Module\Mvc\MvcFacade;

class BarInfrastructure
{
    public function someIntegration(): void
    {
        $mvcFacade = new MvcFacade();
    }
}
