<?php

class Levenshtein implements Distance {

    // str1 and str2 strings to calculate distance
    private $str1;
    private $str2;

    // getters and setters for our private properties
    public function setFirst($str) {
        $this->str1 = $str;
    }

    public function setSecond($str) {
        $this->str2 = $str;
    }

    public function getFirst() {
        return $this->str1;
    }
    
    public function getSecond() {
        return $this->str2;
    }

    // Calculating levenshtein distance
    public function calculate()
    {
        $str1  = $this->getFirst();
        $str2  = $this->getSecond();
        return levenshtein($str1,$str2);
    }

}