<?php

namespace Williamug\AdminFrontend\Tests;

use Orchestra\Testbench\TestCase;
use Williamug\AdminFrontend\AdminFrontendServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AdminFrontendServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
