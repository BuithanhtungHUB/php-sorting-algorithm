<?php


class Selection
{

    public static function selectionSort($array)
    {
        for ($i = 0; $i < count($array) -1; $i++){
            $min = $i;
            for ($j = $i +1; $j < count($array); $j++){
                if ($array[$j] < $array[$min]){
                    $min = $j;
                    $temp = $array[$j];
                    $array[$j] = $array[$i];
                    $array[$i] = $temp;

                }
            }
        }
        return $array;
    }

}