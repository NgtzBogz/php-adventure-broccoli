<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<?php
function Palindrome_Checker($My_String) {
  $z = 0;
  $x = strlen($My_String) - 1;
  $f = 0;

  while($x > $z){
    if ($My_String[$z] != $My_String[$x]){
      $f = 1;
      break;
    }
    $z++;
    $x--;
  }

  if ($f == 0){
    echo $My_String." is a Palindrome string.\n";
  } else {
    echo $My_String." is not a Palindrome string.\n";
  }
}

Palindrome_Checker("rotator"); echo "<br>";
Palindrome_Checker("repaper"); echo "<br>";
Palindrome_Checker("kendrip"); echo "<br>";
?>