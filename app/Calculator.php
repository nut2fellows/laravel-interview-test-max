<?php


namespace App;


class Calculator
{

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add($a, $b)
    {
        // TODO @laravel-test
        return $a + $b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function subtract($a, $b)
    {
        // TODO @laravel-test
        return $a - $b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function multiply($a, $b)
    {
        // TODO @laravel-test
        return $a * $b;
    }

    /**
     * @throws \InvalidArgumentException
     * @param int $a
     * @param int $b
     * @return float
     */
    public function divide($a, $b)
    {
        // TODO @laravel-test
        if($b>0){
            return $a / $b;
        }else{
            $note="b parameter is not allowed 0 value";
            return $note;
        }
    }

    /**
     * @throws \InvalidArgumentException
     * @param int $a
     * @param int $b
     * @return int
     */
    public function modulo($a, $b)
    {
        // TODO @laravel-test
        if(ctype_digit($a) and ctype_digit($b)){
            if($b>0){
                return $a % $b;
            }else{
                $note="b parameters is not allowed to be 0.";
                return $note;
            }
        }else{
            $note="Both ( a & b ) query parameters are required and must be integers.";
            return $note;
        }
    }
}
