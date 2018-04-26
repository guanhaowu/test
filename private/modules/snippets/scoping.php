<?php
echo "Global Scope <br>";
global $result2; //used because of include class or function.
$result2 = "0";
print_r($result2);
echo "<br>";
function convert(){
    global $result2;
    $result2 = '2';
}
convert();
echo $result2."<br>";
ShowSource(__FILE__);
?>
