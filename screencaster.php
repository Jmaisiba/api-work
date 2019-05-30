<?php 
function getResult($int1,$int2){
$result = $int1 * $int2;
return $result;
if ($int1 || $int2 != int) {
  	echo $result." is not a number";
  } elseif ($int1 || $int2 == int) {
  	echo "true";
  }
  
  }
 

$int1=1;
$int2=3;

$result=getResult($int1,$int2);
echo "$result";




?>