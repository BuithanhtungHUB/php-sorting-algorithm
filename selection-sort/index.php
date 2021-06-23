<?php
include_once 'Selection.php';

$myArray = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "<pre>";
print_r(Selection::selectionSort($myArray));
