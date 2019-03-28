<?php

namespace App;

use \PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {

    public function testCalculateAge() {

        $date = new \DateTime;
        $date->setDate(1984, 9, 8);

        $today = new \DateTime;
         #   
        $sample = new \App\Sample($date, $today);
        $this->assertEquals(34, $sample->getAge());
    }

}