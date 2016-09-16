<?php

  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {


    function test_singleWords_noMatch()
    {
        //Test Set-Up
        $input1 = "php";
        $input2 = "java";
        $test_RepeatCounter = new RepeatCounter($input1, $input2);

        //Program Action
        $result = $test_RepeatCounter->CountRepeats();

        //Assertion
        $this->assertEquals(0, $result);
    }

    function test_singleWords_Match()
    {
        //Test Set-Up
        $input1 = "php";
        $input2 = "php";
        $test_RepeatCounter = new RepeatCounter($input1, $input2);

        //Program Action
        $result = $test_RepeatCounter->CountRepeats();

        //Assertion
        $this->assertEquals(1, $result);
    }

    function test_twoWords_Match()
    {
        //Test Set-Up
        $input1 = "php php";
        $input2 = "php";
        $test_RepeatCounter = new RepeatCounter($input1, $input2);

        //Program Action
        $result = $test_RepeatCounter->CountRepeats();

        //Assertion
        $this->assertEquals(2, $result);
    }
  }
  
?>