<?php


class Insertion
{
    public static function insertionSort($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $value = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $array[$j] < $value) {
                $array[$j +1] = $array[$j];
                $j--;
            }
            $array[$j +1] = $value;
        }
        return $array;
    }
}