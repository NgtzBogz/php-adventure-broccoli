<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php

$array = array(3, 6, 9, 12, 15, 18, 21, 24);


$average = array_sum($array) / count($array);


echo $average;
?>