<?php

class RepeatCounter
{
    private $inputString;
    private $comparisonString;
    private $count = 0;

    function __construct($inputString, $comparisonString)
    {
      $this->inputString = $inputString;
      $this->comparisonString = $comparisonString;
    }

    function CountRepeats()
    {
      return $this->count;
    }
}
?>