<?php

use PHPUnit\Framework\TestCase;

require_once "WordCount.php";
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        $Wc = new WordCount();
        $TestSetence = "My name is joko oke";
        $WordCount = $Wc->countWords($TestSetence);
        $this->assertEquals(5, $WordCount);
    }
}
