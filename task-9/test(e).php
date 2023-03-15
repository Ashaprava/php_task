<?php
///arsort array
$age = array("asha"=>"22","aman"=>"19","rashmi"=>"20");
arsort($age);

foreach($age as $a=>$val){
    echo "her name is " .$a ." and  age is ".$val;
    echo "<br>";
}

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// arsort($age);

// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }
?>