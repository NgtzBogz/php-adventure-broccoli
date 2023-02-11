<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->

<?php
$Zato1 = "I once had some sweet memories";

foreach (count_chars($Zato1, 1) as $i => $za) {
   echo "There were $za instance(s) of \"" , chr($i) , "\" in the string.<br>";
}
?>