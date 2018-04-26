<?php
echo "Calculator: <br>";

$num1 = 100;
$num2 = 200;
$result = addNumbers($num1,$num2); 
echo $result."<br>";

$result = addNumbers($num1,$result);
echo $result."<br>";

$result = addNumbers($result,$num2);
echo $result."<br>";

ShowSource(__FILE__);
?>