<?php

class Hamming implements Distance {

    // str1 and str2 strings to calculate distance
    private $str1;
    private $str2;

    // Getters and setters for our private properties
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

    // /**
    //  * Note: This logic from https://www.geeksforgeeks.org/hamming-distance-two-strings/
    //  * @return int
    //  */
    public function calculate() {
        $str1  = $this->getFirst();
        $str2  = $this->getSecond();
        $i     = 0;
        $count = 0;
        while (isset($str1[$i]) != '')
        {
            if ($str1[$i] != $str2[$i])
                $count++;
            $i++;
        }
        return $count;
    }
}