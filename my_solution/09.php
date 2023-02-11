<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
 <?php
$string    = "oh no! kendrick has the drip! its kendrip time!";
$trans = array("a" => "","e"=>"","i"=>"","o"=>"","u"=>"");
echo strtr($string, $trans);
?>