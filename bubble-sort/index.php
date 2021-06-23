<?php

include_once 'Bubble.php';

$myArray = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
echo "<pre>";
print_r(Bubble::bubbleSort($myArray));