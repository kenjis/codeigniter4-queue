<?php

declare(strict_types=1);

namespace Tests\Support;

use CodeIgniter\I18n\Time;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use Exception;

abstract class TestCase extends CIUnitTestCase
{
    use DatabaseTestTrait;

    protected $namespace;

    protected function setUp(): void
    {
        $this->resetServices();

        parent::setUp();
    }

    /**
     * @throws Exception
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        // Reset the current time.
        Time::setTestNow();
    }
}
