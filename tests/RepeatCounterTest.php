<?php


  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {


    function test_singleWords_noMatch()
    {
        //Test Set-Up
        $test_RepeatCounter = new RepeatCounter;
        $input1 = "php";
        $input2 = "java";

        //Program Action
        $result = $test_RepeatCounter->CountRepeats($input1, $input2);

        //Assertion
        $this->assertEquals(0, $result);
    }
  }
  ?>