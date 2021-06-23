<?php

include_once 'Insertion.php';

$myArray = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
echo "<pre>";
print_r(Insertion::insertionSort($myArray));