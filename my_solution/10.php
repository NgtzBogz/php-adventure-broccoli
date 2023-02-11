<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->

 <?php


$numbers = [4, 8, 12, 16, 20, 24];
$length = count($numbers);

$second_half_length = $length / 2;

$first_half_length = $second_half_length - 1;

$first_half = $numbers[$first_half_length];
$second_half = $numbers[$second_half_length];
$median = ($first_half + $second_half) / 2;

echo $median;

?>