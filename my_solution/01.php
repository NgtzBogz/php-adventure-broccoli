<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php
    $vowel_letter = ['a','e','i','o','u'];
    $letter = "I";

    if (in_array(strtolower($letter), $vowel_letter)) 
        echo $letter." is a Vowel";
     else 
        echo $letter." is a Consonant";
?>