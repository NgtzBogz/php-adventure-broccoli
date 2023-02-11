<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php
   function digit_s($nums){
      $sum = 0;
      for ($i = 0; $i < strlen($nums); $i++){
         $sum += $nums[$i];
      }
      return $sum;
   }
   $nums = "28";
   print_r("The sum of digits is ");
   echo digit_s($nums);
?>