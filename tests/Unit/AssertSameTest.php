<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssertSameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSame()
    {
        $this->assertSame(2, 1 + 1);
    }
}
