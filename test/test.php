<?php

use Weight;

class WeightCheckTest extends \PHPUnit\Framework\TestCase
{

    function setUp(): void{
        $inventory = new Weight;
    }

public function testMinAmount()
   {
    $weight = new Weight;
    $weight->setWeight(900);
    $this->assertEquals("Overweight", $weight->checkWeight());
   }
}