<?php

class RepeatCounter
{
    private $inputString;
    private $comparisonString;
    private $wordCount = 0;

    function __construct($inputString, $comparisonString)
    {
      $this->inputString = $inputString;
      $this->comparisonString = $comparisonString;
    }

    function CountRepeats()
    {
      if ($this->inputString == $this->comparisonString)
      {
        $this->wordCount++;
      }
      return $this->wordCount;
    }
}
?>