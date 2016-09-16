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
          $this->inputString = explode(" ", $this->inputString);
          foreach ($this->inputString as $string) 
          {
            if ($string == $this->comparisonString)        
              $this->wordCount++;
          }
          return $this->wordCount;
        }
    }
    
?>