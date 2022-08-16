<?php

declare(strict_types=1);

namespace Module\Foo\Application;

use Shared\Haystack\Application\SharedHaystackApplication;
use Shared\Haystack\Application\SharedHaystackDomain;

class FooApplication
{
    public function test(): void
    {
        $sharedHaystackApplication = new SharedHaystackApplication();
        $sharedHaystackDomain = new SharedHaystackDomain();
    }
}
