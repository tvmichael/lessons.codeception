<?php

class TemperatureTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $t = $this->make(Model\Temperature::class);
        $this->assertSame(0, $t->now());
    }
}