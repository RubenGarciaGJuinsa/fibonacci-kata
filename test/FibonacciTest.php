<?php

namespace Test;

use Kata\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * @test
    * @dataProvider PositionAndResultDataProvider
     */
    public function
    given_position_get_value(
        $input,
        $expected
    )
    {
        $fibonacci = new Fibonacci();
        $result = $fibonacci->getValueByIndex($input);
        $this->assertIsNumeric($result);
        $this->assertEquals($expected, $result);
    }

    public function PositionAndResultDataProvider()
    {
        return [
            [1, 0]
        ];
    }
}