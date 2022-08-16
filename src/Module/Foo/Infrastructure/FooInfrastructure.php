<?php

declare(strict_types=1);

namespace Module\Foo\Infrastructure;

use Module\Bar\UserInterface\BarFacade;

class FooInfrastructure
{
    public function test(): void
    {
        $barUserInterface = new BarFacade();
    }
}
