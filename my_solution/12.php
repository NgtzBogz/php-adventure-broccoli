<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php
function pass_gen($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*';
  return substr(str_shuffle($data), 0, $chars);
}
  echo "Your temp pass is: ". pass_gen(8);
?>