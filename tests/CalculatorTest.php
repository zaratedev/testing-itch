<?php

use Itch\Calculator;

class CalculatorTest extends PHPUnit\Framework\TestCase
{

    /** @test */
    public function it_should_return_the_sum_of_two_number_when_the_parameters_are_correct()
    {
        $result = (new Calculator())->sum(2, 2);
        
        $this->assertEquals(4, $result);
    }
}
